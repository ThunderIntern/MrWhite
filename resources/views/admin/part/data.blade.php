data-id="{{ $products->id }}"
data-barcode="{{ $products->barcode }}"
data-nama="{{ $products->nama }}"
data-harga="{{ $products->presentPrice() }}"
data-deskripsi="{{ $products->deskripsi }}"
data-gambar="{{ $products->url_gambar }}"

data-jenis="{{ $products->jenis }}"
data-namaCategories="{{ $products->name }}"

data-tag="{{ $products->links[0]->tag }}"
data-link="{{ $products->links[0]->link }}"
