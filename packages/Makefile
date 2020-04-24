all:
	@echo This make file is for developers.
	@echo run \"make update-web\" to copy the web sources to /var/www/archer/...
	@echo run \"make update-services\" to copy the services sources to /opt/archer/service/...


update-web:
	bin/update_web.bash .. /var/www/archer
	service apache2 restart
	service ARCHERImageReplicator restart
	service ARCHERMulticastManager restart
	service ARCHERScheduler restart
	service ARCHERSnapinReplicator restart

update-services:
	bin/update_services.bash .. /opt/archer/service
	service apache2 restart
	service ARCHERImageReplicator restart
	service ARCHERMulticastManager restart
	service ARCHERScheduler restart
	service ARCHERSnapinReplicator restart


