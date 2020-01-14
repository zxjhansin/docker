SVER=$(shell date +"%m%d")
REPO=jhansin
SRC=../src/
IMG=mdc-user:$(SVER)


all: build push
 
build:
	docker build -t jhansin/$(IMG) .
push:
	docker tag jhansin/$(IMG) $(REPO)/$(IMG)
	docker push $(REPO)/$(IMG)
	docker rmi $(REPO)/$(IMG)
