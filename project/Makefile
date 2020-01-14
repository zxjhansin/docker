SHELL=/bin/bash
PRJ=mdc
MVER=3.1
SVER=$(MVER).$(shell date +"%m%d")$(DOT)
BVER=$(shell date +"%Y%m%d")$(DOT)
BDIR=/Users/zhangxin/build/$(MVER)/$(BVER)



user:
	cd user; make -B BDIR=$(BDIR) PRJ=$(PRJ) MVER=$(MVER) SVER=$(SVER)

