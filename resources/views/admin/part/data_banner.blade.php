data-id="{{ $banners->id }}"
data-name="{{ $banners->name }}"
data-gambar="{{ $banners->url_gambar }}"
data-date_show="{{ $banners->date_show }}"
data-date_off="{{ $banners->date_off }}"
data-link="{{ str_limit($banners->url_link, 80) }}"
