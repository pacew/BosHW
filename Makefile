QRFILES = qr1801.png qr1802.png qr1803.png

QRZIP=boshw-qr-$(shell date +%Y%m%d)-draft.zip

FILES = sign1-en.html style.css sign1-ship1-1920.png \
	sign1-ship1-600.png \
	sign1-portrait-600.png \
	sign1-ad3-600.png \
	sign1-model-600.png \
	background1-1180.png \
	background1-600.png \
	index.php \
	harborwalk-logo-ico.png \
	harborwalk-logo-40.png \
	harborwalk-logo-80.png \
	script.js \
	harborwalk-logo-298x300.png

all: $(QRZIP)

qr1801.png: mkqr
	./mkqr 1801

qr1802.png: mkqr
	./mkqr 1802

qr1803.png: mkqr
	./mkqr 1803

$(QRZIP): $(QRFILES)
	rm -f $(QRZIP)
	zip $(QRZIP) $(QRFILES)

publish:
	rsync $(FILES) willisson.org:/var/www/boshw/
