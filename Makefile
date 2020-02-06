QRFILES = qr1801.png qr1802.png qr1803.png qr1804.png \
	qr1901.png qr1902.png qr1903.png \
	qr1904.png qr1905.png qr1906.png \
	qr2001.png qr2002.png qr2003.png

QRFILES_ES = qr1801-es.png qr1802-es.png qr1803-es.png qr1804-es.png \
	qr1901-es.png qr1902-es.png qr1903-es.png \
	qr1904-es.png qr1905-es.png qr1906-es.png \
	qr2001-es.png qr2002-es.png qr2003-es.png

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
	s1904-es.html \
	s1905-en.html \
	sign1903-banner-hires.jpg \
	sign1903-banner-lores.jpg \
	sign1903-bg-hires.jpg \
	sign1903-bg-lores.jpg \
	sign1903-img1.jpg \
	sign1903-img2.jpg \
	sign1903-img3.jpg \
	inplace1903-1-hi.jpg \
	inplace1903-1-lo.jpg \
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
	sign1905-img1.jpg \
	\
	sign1906-banner-hires.jpg \
	sign1906-banner-lores.jpg \
	sign1906-bg-hires.jpg \
	sign1906-bg-lores.jpg \
	inplace1906-1-hi.jpg \
	inplace1906-1-lo.jpg \
	s1906-en.html \
	s1906-es.html \
	sign1906-1.jpg \
	sign1906-2.jpg \
	sign1906-3.jpg \
	sign1906-4.jpg \
	sign1906-5.jpg \
	sign1906-6.jpg \
	sign1906-7.jpg \
	sign1906-8.jpg \
	\
	s2001-en.html \
	sign2001-banner-hires.jpg \
	sign2001-banner-lores.jpg \
	sign2001-bg-hires.jpg \
	sign2001-bg-lores.jpg \
	sign2001-img1.jpg \
	sign2001-img2.jpg \
	sign2001-img3.jpg \
	sign2001-img4.jpg \
	\
	s2002-en.html \
	sign2002-banner-hires.jpg \
	sign2002-banner-lores.jpg \
	sign2002-bg-hires.jpg \
	sign2002-bg-lores.jpg \
	sign2002-img1.jpg \
	sign2002-img2.jpg \
	sign2002-img3.jpg \
	\
	s2003-en.html \
	sign2003-banner-hires.jpg \
	sign2003-banner-lores.jpg \
	sign2003-bg-hires.jpg \
	sign2003-bg-lores.jpg \
	sign2003-img1.jpg \
	sign2003-img2.jpg \
	sign2003-img3.jpg


AUDIO = audio/floating-barracks.mp3 \
	audio/local-industries.mp3 \
	audio/shipbuilding-center.mp3 \
	audio/ship-repair.mp3 \
	audio/transformed-land.mp3

all: $(QRZIP)

qr1801.png qr1801-es.png: mkqr
	./mkqr 1801

qr1802.png qr1802-es.png: mkqr
	./mkqr 1802

qr1803.png qr1803-es.png: mkqr
	./mkqr 1803

qr1804.png qr1804-es.png: mkqr
	./mkqr 1804

qr1901.png qr1901-es.png: mkqr
	./mkqr 1901

qr1902.png qr1902-es.png: mkqr
	./mkqr 1902

qr1903.png qr1903-es.png: mkqr
	./mkqr 1903

qr1904.png qr1904-es.png: mkqr
	./mkqr 1904

qr1905.png qr1905-es.png: mkqr
	./mkqr 1905

qr1906.png qr1906-es.png: mkqr
	./mkqr 1906

qr2001.png qr2001-es.png: mkqr
	./mkqr 2001

qr2002.png qr2002-es.png: mkqr
	./mkqr 2002

qr2003.png qr2003-es.png: mkqr
	./mkqr 2003

$(QRZIP): $(QRFILES) $(QRFILES_ES)
	rm -f $(QRZIP)
	zip $(QRZIP) $(QRFILES) $(QRFILES_ES)

publish:
	rsync -avz $(FILES) $(QRFILES) $(QRFILES_ES) \
		willisson.org:/var/www/boshw/
	rsync -avz $(AUDIO) willisson.org:/var/www/boshw/audio/

