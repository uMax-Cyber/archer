<?php
/**
 * This is a starter file. It's purpose, in my eyes, is to contain
 * all the text within archer that needs to be translated for other
 * languages. The idea is to make the translations needed all
 * in one file. You just call the variable and array you need.
 * The other idea of this is to make one location for multiple
 * calls. For example, Host updated and Printer updated would
 * only need to be called as %s updated. The word updated, could
 * then be translated just the one time for all the languages.
 * Then the element Host or Printer could be translated later.
 *
 * PHP version 5
 * @link     https://archer.umax.uz
 */
//Singular, status words to translate.
$archerlang['Display'] = _('Display');
$archerlang['Auto'] = _('Auto');
$archerlang['Model'] = _('Model');
$archerlang['Inventory'] = _('Inventory');
$archerlang['OS'] = _('O/S');
$archerlang['Edit'] = _('Edit');
$archerlang['Delete'] = _('Delete');
$archerlang['Deleted'] = _('Deleted');
$archerlang['All'] = _('All');
$archerlang['Add'] = _('Add');
$archerlang['Search'] = _('Search');
$archerlang['Storage'] = _('Storage');
$archerlang['Snapin'] = _('Snapin');
$archerlang['Snapins'] = _('Snapins');
$archerlang['Remove'] = _('Remove');
$archerlang['Removed'] = _('Removed');
$archerlang['Enabled'] = _('Enabled');
$archerlang['Management'] = _('Management');
$archerlang['Update'] = _('Update');
$archerlang['Image'] = _('Image');
$archerlang['Images'] = _('Images');
$archerlang['Node'] = _('Node');
$archerlang['Group'] = _('Group');
$archerlang['Groups'] = _('Groups');
$archerlang['Logout'] = _('Logout');
$archerlang['Host'] = _('Host');
$archerlang['Hosts'] = _('Hosts');
$archerlang['Bandwidth'] = _('Bandwidth');
$archerlang['BandwidthReplication'] = _('Replication Bandwidth');
$archerlang['BandwidthRepHelp'] = sprintf(
    '%s. %s %s. %s %s %s, %s.',
    _('This setting limits the bandwidth for replication between nodes'),
    _('It operates by getting the max bandwidth setting of the node'),
    _('it\'s transmitting to'),
    _('So if you are trying to transmit to remote node A'),
    _('and node A only has a 5Mbps and you want the speed'),
    _('limited to 1Mbps on that node'),
    _('you set the bandwidth field on that node to 1000')
);
$archerlang['Transmit'] = _('Transmit');
$archerlang['Receive'] = _('Receive');
$archerlang['New'] = _('New');
$archerlang['User'] = _('User');
$archerlang['Users'] = _('Users');
$archerlang['Name'] = _('Name');
$archerlang['Members'] = _('Members');
$archerlang['Advanced'] = _('Advanced');
$archerlang['Hostname'] = _('Hostname');
$archerlang['IP'] = _('IP');
$archerlang['MAC'] = _('MAC');
$archerlang['Version'] = _('Version');
$archerlang['Text'] = _('Text');
$archerlang['Graphical'] = _('Graphical');
$archerlang['File'] = _('File');
$archerlang['Path'] = _('Path');
$archerlang['Shutdown'] = _('Shutdown');
$archerlang['Reboot'] = _('Reboot');
$archerlang['Time'] = _('Time');
$archerlang['Action'] = _('Action');
$archerlang['Printer'] = _('Printer');
$archerlang['PowerManagement'] = _('Power Management');
$archerlang['Client'] = _('Client');
$archerlang['Task'] = _('Task');
$archerlang['Username'] = _('Username');
$archerlang['Service'] = _('Service');
$archerlang['General'] = _('General');
$archerlang['Mode'] = _('Mode');
$archerlang['Date'] = _('Date');
$archerlang['Clear'] = _('Clear');
$archerlang['Desc'] = _('Description');
$archerlang['Here'] = _('here');
$archerlang['NOT'] = _('NOT');
$archerlang['or'] = _('or');
$archerlang['Row'] = _('Row');
$archerlang['Errors'] = _('Errors');
$archerlang['Error'] = _('Error');
$archerlang['Export'] = _('Export');
$archerlang['Schedule'] = _('Schedule');
$archerlang['Deploy'] = _('Deploy');
$archerlang['Capture'] = _('Capture');
$archerlang['Multicast'] = _('Multicast');
$archerlang['Status'] = _('Status');
$archerlang['Actions'] = _('Actions');
$archerlang['Hosts'] = _('Hosts');
$archerlang['State'] = _('State');
$archerlang['Kill'] = _('Kill');
$archerlang['Kernel'] = _('Kernel');
$archerlang['Location'] = _('Location');
$archerlang['N/A'] = _('N/A');
$archerlang['Home'] = _('Home');
$archerlang['Report'] = _('Report');
$archerlang['Reports'] = _('Reports');
$archerlang['Login'] = _('Login');
$archerlang['Queued'] = _('Queued');
$archerlang['Complete'] = _('Complete');
$archerlang['Unknown'] = _('Unknown');
$archerlang['Force'] = _('Force');
$archerlang['Type'] = _('Type');
$archerlang['Settings'] = _('Settings');
$archerlang['ARCHER'] = _('ARCHER');
$archerlang['Active'] = _('Active');
$archerlang['Printers'] = _('Printers');
$archerlang['Directory'] = _('Directory');
$archerlang['AD'] = _('Active Directory');
$archerlang['VirusHistory'] = _('Virus History');
$archerlang['LoginHistory'] = _('Login History');
$archerlang['ImageHistory'] = _('Image History');
$archerlang['SnapinHistory'] = _('Snapin History');
$archerlang['Configuration'] = _('Configuration');
$archerlang['Plugin'] = _('Plugin');
$archerlang['Locations'] = _('Locations');
$archerlang['Location'] = _('Location');
$archerlang['License'] = _('License');
$archerlang['KernelUpdate'] = _('Kernel Update');
$archerlang['PXEBootMenu'] = _('iPXE General Configuration');
$archerlang['ClientUpdater'] = _('Client Updater');
$archerlang['HostnameChanger'] = _('Hostname Changer');
$archerlang['HostRegistration'] = _('Host Registration');
$archerlang['SnapinClient'] = _('Snapin Client');
$archerlang['TaskReboot'] = _('Task Reboot');
$archerlang['UserCleanup'] = _('User Cleanup');
$archerlang['UserTracker'] = _('User Tracker');
$archerlang['SelManager'] = _('%s Manager');
$archerlang['GreenARCHER'] = _('Green ARCHER');
$archerlang['DirectoryCleaner'] = _('Directory Cleaner');
$archerlang['MACAddrList'] = _('MAC Address List');
$archerlang['ARCHERSettings'] = _('ARCHER Settings');
$archerlang['ServerShell'] = _('Server Shell');
$archerlang['LogViewer'] = _('Log Viewer');
$archerlang['ConfigSave'] = _('Configuration Save');
$archerlang['ARCHERSFPage'] = _('ARCHER Sourceforge Page');
$archerlang['ARCHERWebPage'] = _('ARCHER Home Page');
$archerlang['NewSearch'] = _('New Search');
$archerlang['ListAll'] = _('List All %s');
$archerlang['CreateNew'] = _('Create New %s');
$archerlang['Tasks'] = _('Tasks');
$archerlang['ClientSettings'] = _('Client Settings');
$archerlang['Plugins'] = _('Plugins');
$archerlang['BasicTasks'] = _('Basic Tasks');
$archerlang['Membership'] = _('Membership');
$archerlang['ImageAssoc'] = _('Image Association');
$archerlang['SelMenu'] = _('%s Menu');
$archerlang['PrimaryGroup'] = _('Primary Group');
$archerlang['AllSN'] = _('All Storage Nodes');
$archerlang['AddSN'] = _('Add Storage Node');
$archerlang['AllSG'] = _('All Storage Groups');
$archerlang['AddSG'] = _('Add Storage Group');
$archerlang['ActiveTasks'] = _('Active Tasks');
$archerlang['ActiveMCTasks'] = _('Active Multicast Tasks');
$archerlang['ActiveSnapins'] = _('Active Snapin Tasks');
$archerlang['ScheduledTasks'] = _('Scheduled Tasks');
$archerlang['InstalledPlugins'] = _('Installed Plugins');
$archerlang['InstallPlugins'] = _('Install Plugins');
$archerlang['ActivatePlugins'] = _('Activate Plugins');
$archerlang['ExportConfig'] = _('Export Configuration');
$archerlang['ImportConfig'] = _('Import Configuration');
$archerlang['Slogan'] = _('Open Source Computer Cloning Solution');
$archerlang['InvalidMAC'] = _('Invalid MAC Address!');
$archerlang['PXEConfiguration'] = _('iPXE Menu Item Settings');
$archerlang['PXEMenuCustomization'] = _('iPXE Menu Customization');
$archerlang['NewMenu'] = _('iPXE New Menu Entry');
$archerlang['Submit'] = _('Save Changes');
$archerlang['RequiredDB'] = _('Required database field is empty');
$archerlang['NoResults'] = _('No results found');
$archerlang['isRequired'] = _('%s is required');
// Page Names
$archerlang['Host Management'] = _('Host Management');
$archerlang['Storage Management'] = _('Storage Management');
$archerlang['Task Management'] = _('Task Management');
$archerlang['Client Management'] = _('Client Management');
$archerlang['Dashboard'] = _('Dashboard');
$archerlang['Service Configuration'] = _('Service Configuration');
$archerlang['Report Management'] = _('Report Management');
$archerlang['Printer Management'] = _('Printer Management');
$archerlang['ARCHER Configuration'] = _('ARCHER Configuration');
$archerlang['Group Management'] = _('Group Management');
$archerlang['Image Management'] = _('Image Management');
$archerlang['User Management'] = _('User Management');
$archerlang['Hardware Information'] = _('Hardware Information');
$archerlang['Snapin Management'] = _('Snapin Management');
$archerlang['Plugin Management'] = _('Plugin Management');
$archerlang['Location Management'] = _('Location Management');
$archerlang['Access Management'] = _('Access Control Management');
// Help page translations
$archerlang['GenHelp'] = _('ARCHER General Help');
// Sub Menu translates
$archerlang['PendingHosts'] = _('Pending Hosts');
$archerlang['LastDeployed'] = _('Last Deployed');
$archerlang['LastCaptured'] = _('Last Captured');
$archerlang['DeployMethod'] = _('Deploy Method');
$archerlang['ImageType'] = _('Image Type');
$archerlang['NoAvail'] = _('Not Available');
$archerlang['ExportHost'] = _('Export Hosts');
$archerlang['ImportHost'] = _('Import Hosts');
$archerlang['ExportUser'] = _('Export Users');
$archerlang['ImportUser'] = _('Import Users');
$archerlang['ExportImage'] = _('Export Images');
$archerlang['ImportImage'] = _('Import Images');
$archerlang['ExportGroup'] = _('Export Groups');
$archerlang['ImportGroup'] = _('Import Groups');
$archerlang['ExportSnapin'] = _('Export Snapins');
$archerlang['ImportSnapin'] = _('Import Snapins');
$archerlang['ExportPrinter'] = _('Export Printers');
$archerlang['ImportPrinter'] = _('Import Printers');
$archerlang['EquipLoan'] = _('Equipment Loan');
$archerlang['HostList'] = _('Host List');
$archerlang['ImageLog'] = _('Imaging Log');
$archerlang['PendingMACs'] = _('Pending MACs');
$archerlang['SnapinLog'] = _('Snapin Log');
$archerlang['UploadRprts'] = _('Upload Reports');
// ARCHER Sub Menu translates
$archerlang['MainMenu'] = _('Main Menu');
// ProcessLogin
$archerlang['InvalidLogin'] = _('Invalid Login');
$archerlang['NotAllowedHere'] = _('Not allowed here');
$archerlang['ManagementLogin'] = _('Management Login');
$archerlang['Password'] = _('Password');
$archerlang['ARCHERSites'] = _('Estimated ARCHER Sites');
$archerlang['LatestVer'] = _('Latest Version');
$archerlang['LatestDevVer'] = _('Latest Development Version');
// Image class Translates
$archerlang['ProtectedImage'] = _('Image is protected and cannot be deleted');
$archerlang['ProtectedSnapin'] = _('Snapin is protected and cannot be deleted');
$archerlang['NoMasterNode'] = _('No master nodes are enabled to delete this image');
$archerlang['FailedDeleteImage'] = _('Failed to delete image files');
$archerlang['FailedDelete'] = _('Failed to delete file');
// PXEMenu Translates
$archerlang['NotRegHost'] = _('Not Registered Hosts');
$archerlang['RegHost'] = _('Registered Hosts');
$archerlang['AllHosts'] = _('All Hosts');
$archerlang['DebugOpts'] = _('Debug Options');
$archerlang['AdvancedOpts'] = _('Advanced Options');
$archerlang['AdvancedLogOpts'] = _('Advanced Login Required');
$archerlang['PendRegHost'] = _('Pending Registered Hosts');
// ARCHERCore Translates
$archerlang['n/a'] = _('n/a');
// Service Translates
$archerlang['DirExists'] = _('Directory Already Exists');
$archerlang['TimeExists'] = _('Time Already Exists');
$archerlang['UserExists'] = _('User Already Exists');
// Host class translates
$archerlang['NoActSnapJobs'] = _('No Active Snapin Jobs Found For Host');
$archerlang['FailedTask'] = _('Failed to create task');
$archerlang['InTask'] = _('Host is already a member of an active task');
$archerlang['HostNotValid'] = _('Host is not valid');
$archerlang['GroupNotValid'] = _('Group is not valid');
$archerlang['TaskTypeNotValid'] = _('Task Type is not valid');
$archerlang['ImageNotValid'] = _('Image is not valid');
$archerlang['ImageGroupNotValid'] = _('The image storage group assigned is not valid');
$archerlang['SnapNoAssoc'] = _('There are no snapins associated with this host');
$archerlang['SnapDeploy'] = _('Snapins Are already deployed to this host');
$archerlang['NoFoundSG'] = sprintf(
    '%s %s.',
    _('Could not find a Storage Node is'),
    _('there one enabled within this Storage Group')
);
$archerlang['SGNotValid'] = sprintf(
    '%s',
    _('The storage groups associated storage node is not valid')
);
$archerlang['InPast'] = _('Scheduled date is in the past');
$archerlang['TaskSchExists'] = sprintf(
    '%s',
    _('A task already exists for this host at the scheduled tasking')
);
$archerlang['MinNotValid'] = _('Minute value is not valid');
$archerlang['HourNotValid'] = _('Hour value is not valid');
$archerlang['DOMNotValid'] = _('Day of month value is not valid');
$archerlang['MonthNotValid'] = _('Month value is not valid');
$archerlang['DOWNotValid'] = _('Day of week value is not valid');
// MAC Address class translates
$archerlang['NoHostFound'] = _('No Host found for MAC Address');
// ManagerController class translates
$archerlang['PleaseSelect'] = _('Please select an option');
// HostManager Class translates
$archerlang['ErrorMultipleHosts'] = sprintf(
    '%s',
    _('Error multiple hosts returned for list of mac addresses')
);
// User class translates
$archerlang['SessionTimeout'] = _('Session timeout');
// Storage Page translates
$archerlang['SN'] = _('Storage Node');
$archerlang['SG'] = _('Storage Group');
$archerlang['GraphEnabled'] = _('Graph Enabled');
$archerlang['MasterNode'] = _('Master Node');
$archerlang['IsMasterNode'] = _('Is Master Node');
$archerlang['SNName'] = _('Storage Node Name');
$archerlang['SNDesc'] = _('Storage Node Description');
$archerlang['IPAdr'] = _('IP Address');
$archerlang['MaxClients'] = _('Max Clients');
$archerlang['ImagePath'] = _('Image Path');
$archerlang['FTPPath'] = _('FTP Path');
$archerlang['SnapinPath'] = _('Snapin Path');
$archerlang['SSLPath'] = _('SSL Path');
$archerlang['Interface'] = _('Interface');
$archerlang['IsEnabled'] = _('Is Enabled');
$archerlang['IsGraphEnabled'] = _('Is Graph Enabled');
$archerlang['OnDash'] = _('On Dashboard');
$archerlang['ManUser'] = _('Management Username');
$archerlang['ManPass'] = _('Management Password');
$archerlang['CautionPhrase'] = sprintf(
    '%s! %s, %s %s %s. %s %s. %s, %s, %s, %s, %s, %s.',
    _('Use extreme caution with this setting'),
    _('This setting'),
    _('if used incorrectly could potentially'),
    _('wipe out all of your images stored on'),
    _('all current storage nodes'),
    _('The \'Is Master Node\' setting defines which'),
    _('node is the distributor of the images'),
    _('If you add a blank node'),
    _('meaning a node that has no images on it'),
    _('and set it to master'),
    _('it will distribute its store'),
    _('which is empty'),
    _('to all nodes in the group')
);
$archerlang['StorageNameRequired'] = sprintf(
    $archerlang['isRequired'],
    _('Storage Node Name')
);
$archerlang['StorageNameExists'] = _('Storage Node already exists');
$archerlang['StorageIPRequired'] = sprintf(
    $archerlang['isRequired'],
    _('Storage Node IP')
);
$archerlang['StorageClientsRequired'] = sprintf(
    $archerlang['isRequired'],
    _('Storage Node Max Clients')
);
$archerlang['StorageIntRequired'] = sprintf(
    $archerlang['isRequired'],
    _('Storage Node Interface')
);
$archerlang['StorageUserRequired'] = sprintf(
    $archerlang['isRequired'],
    _('Storage Node Username')
);
$archerlang['StoragePassRequired'] = sprintf(
    $archerlang['isRequired'],
    _('Storage Node Password')
);
$archerlang['SNCreated'] = _('Storage Node Created');
$archerlang['SNUpdated'] = _('Storage Node Updated');
$archerlang['DBupfailed'] = _('Database Update Failed');
$archerlang['ConfirmDel'] = _('Please confirm you want to delete');
$archerlang['FailDelSN'] = _('Failed to destroy Storage Node');
$archerlang['SNDelSuccess'] = _('Storage Node deleted');
$archerlang['SGName'] = _('Storage Group Name');
$archerlang['SGDesc'] = _('Storage Group Description');
$archerlang['SGNameReq'] = sprintf(
    $archerlang['isRequired'],
    $archerlang['SGName']
);
$archerlang['SGExist'] = _('Storage Group Already Exists');
$archerlang['SGCreated'] = _('Storage Group Created');
$archerlang['SGUpdated'] = _('Storage Group Updated');
$archerlang['OneSG'] = _('You must have at least one Storage Group');
$archerlang['SGDelSuccess'] = _('Storage Group deleted');
$archerlang['FailDelSG'] = _('Failed to destroy Storage Group');
$archerlang['InvalidClass'] = _('Invalid Class');
$archerlang['NotExtended'] = _('Class is not extended from ARCHERPage');
$archerlang['DoNotList'] = _('Do not list on menu');
// Language menu options.
$archerlang['LanguagePhrase'] = _('Language');
$archerlang['Language']['zh'] = '中国的';
$archerlang['Language']['en'] = 'English';
$archerlang['Language']['es'] = 'Español';
$archerlang['Language']['fr'] = 'Français';
$archerlang['Language']['de'] = 'Deutsch';
$archerlang['Language']['it'] = 'Italiano';
$archerlang['Language']['pt'] = 'Português';
