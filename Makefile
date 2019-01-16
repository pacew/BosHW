QRFILES = qr1801.png qr1802.png qr1803.png qr1804.png qr1901.png qr1902.png

QRZIP=boshw-qr-$(shell date +%Y%m%d).zip

FILES = style.css \
	s1801-en.html \
	s1801-es.html \
	sign1801-bg-hires.jpg \
	sign1801-bg-lores.jpg \
	sign1801-banner-hires.jpg \
	sign1801-banner-lores.jpg \
	sign1801-portrait-600.png \
	sign1801-ad3-600.png \
	sign1801-model-600.png \
	s1802-en.html \
	s1802-es.html \
	sign1802-bg-hires.jpg \
	sign1802-bg-lores.jpg \
	sign1802-banner-hires.jpg \
	sign1802-banner-lores.jpg \
	sign1802-img1.jpg \
	sign1802-img3.jpg \
	s1803-en.html \
	s1803-es.html \
	sign1803-bg-hires.jpg \
	sign1803-bg-lores.jpg \
	sign1803-banner-hires.jpg \
	sign1803-banner-lores.jpg \
	sign1803-img1.jpg \
	sign1803-img2.jpg \
	sign1803-img3.jpg \
	sign1803-img4.jpg \
	index.php \
	harborwalk-logo-ico.png \
	harborwalk-logo-40.png \
	harborwalk-logo-80.png \
	script.js \
	harborwalk-logo-298x300.png \
	privacy.html \
	about-en.html \
	about-es.html \
	\
	s1901-en.html \
	sign1901-banner-hires.jpg \
	sign1901-banner-lores.jpg \
	sign1901-bg-hires.jpg \
	sign1901-bg-lores.jpg \
	sign1901-img2.jpg \
	sign1901-img3.jpg \
	sign1901-img4.jpg \
	sign1901-img5.jpg \
	sign1901-img6.jpg \
	\
	s1902-en.html \
	sign1902-banner-hires.jpg \
	sign1902-banner-lores.jpg \
	sign1902-bg-hires.jpg \
	sign1902-bg-lores.jpg \
	sign1902-extra1.jpg \
	sign1902-extra2.jpg \
	sign1902-extra3.jpg \
	sign1902-extra4.jpg \
	sign1902-img3.jpg \
	sign1902-img4.jpg \
	sign1902-img5.jpg

all: $(QRZIP)

qr1801.png: mkqr
	./mkqr 1801

qr1802.png: mkqr
	./mkqr 1802

qr1803.png: mkqr
	./mkqr 1803

qr1804.png: mkqr
	./mkqr 1804

qr1901.png: mkqr
	./mkqr 1901

qr1902.png: mkqr
	./mkqr 1902

$(QRZIP): $(QRFILES)
	rm -f $(QRZIP)
	zip $(QRZIP) $(QRFILES)

publish:
	rsync $(FILES) willisson.org:/var/www/boshw/

