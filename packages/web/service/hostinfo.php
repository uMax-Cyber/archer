<?php
/**
 * Hostinfo returns the host information
 *
 * PHP version 5
 *
 * @category Hostinfo
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
/**
 * Hostinfo returns the host information
 *
 * @category Hostinfo
 * @package  ARCHERProject
 * @author   uMax Group <healer@umax.uz>
 * @license  http://archer.umax.uz/licenses/
 * @link     https://archer.umax.uz
 */
require '../commons/base.inc.php';
header('Content-Type: text/plain');
try {
    ARCHERCore::getHostItem(false);
    $Task = ARCHERCore::$Host->get('task');
    if (ARCHERCore::$useragent) {
        throw new Exception(_('Cannot view from browser'));
    }
    if (!$Task->isValid()) {
        throw new Exception(_('Invalid tasking!'));
    }
    $TaskType = ARCHERCore::getClass(
        'TaskType',
        $Task->get('typeID')
    );
    $Image = $Task->getImage();
    if ($TaskType->isInitNeededTasking()) {
        if ($TaskType->isMulticast()) {
            $MulticastSession = ARCHERCore::getClass(
                'MulticastSession',
                @max(
                    ARCHERCore::getSubObjectIDs(
                        'MulticastSessionAssociation',
                        array('taskID' => $Task->get('id'))
                    )
                )
            );
            $taskImgID = $Task->get('imageID');
            $mcImgID = $MulticastSession->get('image');
            if ($taskImgID != $mcImgID) {
                $Task
                    ->set('imageID', $mcImgID)
                    ->save();
                ARCHERCore::$Host
                    ->set('imageID', $mcImgID);
                $Image = new Image($mcImgID);
            }
            $port = $MulticastSession->get('port');
        }
        $StorageGroup = $StorageNode = null;
        $HookManager->processEvent(
            'BOOT_TASK_NEW_SETTINGS',
            array(
                'Host' => &ARCHERCore::$Host,
                'StorageNode' => &$StorageNode,
                'StorageGroup' => &$StorageGroup
            )
        );
        if (!$StorageGroup || !$StorageGroup->isValid()) {
            $StorageGroup = $Image->getStorageGroup();
        }
        if (!$StorageNode || !$StorageNode->isValid()) {
            $StorageNode = $StorageGroup->getOptimalStorageNode();
        }
        $osid = $Image->get('osID');
        $storage = sprintf(
            '%s:/%s/%s',
            trim($StorageNode->get('ip')),
            trim($StorageNode->get('path'), '/'),
            (
                $TaskType->isCapture() ?
                'dev/' :
                ''
            )
        );
        $storageip = ARCHERCore::resolveHostname(
            $StorageNode
            ->get('ip')
        );
        $img = $Image
            ->get('path');
        $imgFormat = $Image
            ->get('format');
        $imgType = $Image
            ->getImageType()
            ->get('type');
        $imgPartitionType = $Image
            ->getImagePartitionType()
            ->get('type');
        $imgid = $Image
            ->get('id');
        $PIGZ_COMP = $Image
            ->get('compress');
        $shutdown = intval(
            (bool)$Task
            ->get('shutdown')
        );
        list(
            $ignorepg,
            $pct,
            $hostearly,
            $ftp
        ) = ARCHERCore::getSubObjectIDs(
            'Service',
            array(
                'name' => array(
                    'ARCHER_CAPTUREIGNOREPAGEHIBER',
                    'ARCHER_CAPTURERESIZEPCT',
                    'ARCHER_CHANGE_HOSTNAME_EARLY',
                    'ARCHER_TFTP_HOST'
                )
            ),
            'value',
            false,
            'AND',
            'name',
            false,
            ''
        );
        $ftp = (
            $StorageNode->isValid() ?
            $StorageNode->get('ip') :
            $ftp
        );
        if (!$pct < 100
            && !$pct > 4
        ) {
            $pct = 5;
        }
        if ($TaskType->get('id') === 11) {
            $winuser = $Task
                ->get('passreset');
        }
    }
    $fdrive = ARCHERCore::$Host
        ->get('kernelDevice');
    $Inventory = ARCHERCore::$Host
        ->get('inventory');
    $mac = $_REQUEST['mac'];
    $MACs = ARCHERCore::$Host
        ->getMyMacs();
    $clientMacs = array_filter(
        (array)ARCHERCore::parseMacList(
            implode('|', (array)$MACs),
            false,
            true
        )
    );
    $pass = ARCHERCore::$Host->get('ADPass');
    $passtest = ARCHERCore::aesdecrypt($pass);
    if ($test_base64 = base64_decode($passtest)) {
        if (mb_detect_encoding($test_base64, 'utf-8', true)) {
            $pass = $test_base64;
        } elseif (mb_detect_encoding($passtest, 'utf-8', true)) {
            $pass = $passtest;
        }
    }
    $productKey = ARCHERCore::$Host->get('productKey');
    $productKeytest = ARCHERCore::aesdecrypt($productKey);
    if ($test_base64 = base64_decode($productKeytest, 'utf-8', true)) {
        if (mb_detect_encoding($test_base64)) {
            $productKey = $test_base64;
        } elseif (mb_detect_encoding($productKeytest, 'utf-8', true)) {
            $productKey = $productKeytest;
        }
    }
    $repFields = array(
        // Imaging items to set
        'mac' => $mac,
        'ftp' => $ftp,
        'osid' => $osid,
        'storage' => $storage,
        'storageip' => $storageip,
        'img' => $img,
        'imgFormat' => $imgFormat,
        'imgType' => $imgType,
        'imgPartitionType' => $imgPartitionType,
        'imgid' => $imgid,
        'PIGZ_COMP' => sprintf(
            '-%s',
            $PIGZ_COMP
        ),
        'shutdown' => $shutdown,
        'hostearly' => $hostearly,
        'pct' => $pct,
        'ignorepg' => $ignorepg,
        'winuser' => $winuser,
        // Really only needed for multicast
        'port' => $port,
        // Implicit device to use
        'fdrive' => $fdrive,
        // Exposed other elements
        'hostname' => ARCHERCore::$Host->get('name'),
        'hostdesc' => ARCHERCore::$Host->get('description'),
        'hostip' => ARCHERCore::$Host->get('ip'),
        'hostimageid' => ARCHERCore::$Host->get('imageID'),
        'hostbuilding' => ARCHERCore::$Host->get('building'),
        'hostusead' => ARCHERCore::$Host->get('useAD'),
        'hostaddomain' => ARCHERCore::$Host->get('ADDomain'),
        'hostaduser' => ARCHERCore::$Host->get('ADUser'),
        'hostadpass' => trim($pass),
        'hostadou' => str_replace(';', '', ARCHERCore::$Host->get('ADOU')),
        'hostproductkey' => trim($productKey),
        'imagename' => $Image->get('name'),
        'imagedesc' => $Image->get('description'),
        'imageosid' => $osid,
        'imagepath' => $img,
        'primaryuser' => $Inventory->get('primaryUser'),
        'othertag' => $Inventory->get('other1'),
        'othertag1' => $Inventory->get('other2'),
        'sysman' => $Inventory->get('sysman'),
        'sysproduct' => $Inventory->get('sysproduct'),
        'sysserial' => $Inventory->get('sysserial'),
        'mbman' => $Inventory->get('mbman'),
        'mbserial' => $Inventory->get('mbserial'),
        'mbasset' => $Inventory->get('mbasset'),
        'mbproductname' => $Inventory->get('mbproductname'),
        'caseman' => $Inventory->get('caseman'),
        'caseserial' => $Inventory->get('caseserial'),
        'caseasset' => $Inventory->get('caseasset'),
    );
    $TaskArgs = preg_split(
        '#[\s]+#',
        trim($TaskType->get('kernelArgs'))
    );
    foreach ((array)$TaskArgs as $key => &$val) {
        $val = trim($val);
        if (strpos($val, '=') === false) {
            continue;
        }
        $nums = explode('=', $val);
        if (count($nums) > 0) {
            $repFields[$nums[0]] = $nums[1];
        }
        unset($val);
    }
    $HookManager->processEvent(
        'HOST_INFO_EXPOSE',
        array(
            'repFields' => &$repFields,
            'Host'=>&ARCHERCore::$Host
        )
    );
    foreach ((array)$repFields as $key => &$val) {
        printf(
            "[[ -z $%s ]] && export %s=%s\n",
            $key,
            $key,
            escapeshellarg($val)
        );
        unset($val);
    }
} catch (Exception $e) {
    echo $e->getMessage();
    exit(1);
}
