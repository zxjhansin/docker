all: image svc 

image:
	cd image; make -B BDIR=$(BDIR) PRJ=$(PRJ) MVER=$(MVER) SVER=$(SVER)
svc:
	cd svc; make -B BDIR=$(BDIR) PRJ=$(PRJ) MVER=$(MVER) SVER=$(SVER)