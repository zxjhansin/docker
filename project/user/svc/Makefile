YML=compose.yml
SVC=user
IMG=mdc-user

build:
	sed -i ''  s"/\/$(IMG):.*/\/$(IMG):$(SVER)/" $(YML)
	mkdir -p $(BDIR)
	rm -f $(BDIR)/$(SVC)-$(SVER).tar.gz
	rm -rf /tmp/$(SVC)
	mkdir -p /tmp/$(SVC)/$(SVER)
	cp -r * /tmp/$(SVC)/$(SVER)
	cp ../../service /tmp
	cd /tmp; tar czf $(BDIR)/$(SVC)-$(SVER).tar.gz --exclude=Makefile  $(SVC) service
