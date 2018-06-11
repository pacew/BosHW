QRFILES = qr1801.png qr1802.png qr1803.png qr1804.png

QRZIP=boshw-qr-$(shell date +%Y%m%d).zip

FILES = sign1801-en.html style.css sign1801-ship1-1920.png \
	sign1801-ship1-600.png \
	sign1801-portrait-600.png \
	sign1801-ad3-600.png \
	sign1801-model-600.png \
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

qr1804.png: mkqr
	./mkqr 1804

$(QRZIP): $(QRFILES)
	rm -f $(QRZIP)
	zip $(QRZIP) $(QRFILES)

publish:
	rsync $(FILES) willisson.org:/var/www/boshw/
