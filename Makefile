QRFILES = qr1801.png qr1802.png qr1803.png qr1804.png qr1901.png qr1902.png \
	qr1903.png qr1904.png qr1905.png

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
	s1901-es.html \
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
	s1902-es.html \
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
	sign1902-img5.jpg \
	\
	s1903-en.html \
	s1903-es.html \
	s1904-en.html \
	s1905-en.html \
	sign1903-banner-hires.jpg \
	sign1903-banner-lores.jpg \
	sign1903-bg-hires.jpg \
	sign1903-bg-lores.jpg \
	sign1903-img1.jpg \
	sign1903-img2.jpg \
	sign1903-img3.jpg \
	\
	sign1904-banner-hires.jpg \
	sign1904-banner-lores.jpg \
	sign1904-bg-hires.jpg \
	sign1904-bg-lores.jpg \
	sign1904-img1.jpg \
	sign1904-img2.jpg \
	sign1904-img3.jpg \
	\
	sign1905-banner-hires.jpg \
	sign1905-banner-lores.jpg \
	sign1905-bg-hires.jpg \
	sign1905-bg-lores.jpg \
	sign1905-img1.jpg



AUDIO = audio/floating-barracks.mp3 \
	audio/local-industries.mp3 \
	audio/shipbuilding-center.mp3 \
	audio/ship-repair.mp3 \
	audio/transformed-land.mp3

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

qr1903.png: mkqr
	./mkqr 1903

qr1904.png: mkqr
	./mkqr 1904

qr1905.png: mkqr
	./mkqr 1905

$(QRZIP): $(QRFILES)
	rm -f $(QRZIP)
	zip $(QRZIP) $(QRFILES)

publish:
	rsync -avz $(FILES) willisson.org:/var/www/boshw/
	rsync -avz $(AUDIO) willisson.org:/var/www/boshw/audio/

