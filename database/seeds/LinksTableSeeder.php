<?php
use App\Link;
use Illuminate\Database\Seeder;

class LinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Link::insert([
        	[
                'tag'=> 'bukalapak',
                'link'=> 'https://www.bukalapak.com/p/kamera/baterai/on444-jual-battery-canon-lp-e6?from=&product_owner=normal_seller',
                'catalog_id'=>'cat0001'
            ],
            [
                'tag'=> 'bukalapak',
                'link'=> 'https://www.bukalapak.com/p/kamera/baterai/bleyx4-jual-battrey-canon-lp-e6-for-eos-60d-70d-7d-6d-5d-ii-5d-iii?dtm_campaign=fvt_product&dtm_section=detail-2&dtm_source=product_detail&from=&keyword=',
                'catalog_id'=>'cat0002'
            ],
            [
                'tag'=> 'bukalapak',
                'link'=> 'https://www.bukalapak.com/p/fashion-wanita/jam-tangan/1vm1es-jual-jam-tangan-wanita-casio-original-ltp-v001d-1b-analog-hitam?from=homepage&product_owner=seller_brand&type=popular-products-Section-2',
                'catalog_id'=>'cat0003'
            ],
            [
                'tag'=> 'bukalapak',
                'link'=> 'https://www.bukalapak.com/p/perawatan-kecantikan/perawatan-wajah/masker-wajah-wanita/iay3zl-jual-masker-lumpur-naturgo-no-box-30-pcs?from=homepage&product_owner=normal_seller&type=popular-products-Section-3',
                'catalog_id'=>'cat0004'
            ],
            [
                'tag'=> 'bukalapak',
                'link'=> 'https://www.bukalapak.com/p/fashion-wanita/jam-tangan/1wlwa4-jual-jam-tangan-wanita-casio-original-ltp-1129a?dtm_campaign=related&dtm_section=detail-1&dtm_source=product_detail&from=&keyword=',
                'catalog_id'=>'cat0005'
            ],
            [
                'tag'=> 'bukalapak',
                'link'=> 'https://www.bukalapak.com/p/perawatan-kecantikan/perawatan-wajah/masker-wajah-wanita/hftl40-jual-masker-lumpur-naturgo-no-box-1-pcs?dtm_campaign=fvt_product&dtm_section=detail-2&dtm_source=product_detail&from=&keyword=',
                'catalog_id'=>'cat0006'
            ],
            [
                'tag'=> 'bukalapak',
                'link'=> 'https://www.bukalapak.com/p/perawatan-kecantikan/perawatan-wajah/masker-wajah-wanita/87wvnk-jual-masker-lumpur-naturgo?dtm_campaign=related&dtm_section=detail-1&dtm_source=product_detail&from=&keyword=',
                'catalog_id'=>'cat0007'
            ],
            [
                'tag'=> 'bukalapak',
                'link'=> 'https://www.bukalapak.com/p/perawatan-kecantikan/perawatan-wajah/masker-wajah-wanita/a2mm3s-jual-hello-kitty-naturgo-masker-lumpur-1-sachet?category_slugs=perawatan-kecantikan%2Fperawatan-wajah%2Fmasker-wajah-wanita&dtm_campaign=related&dtm_section=detail-1&dtm_source=product_detail&from=&keyword=',
                'id_catalog'=>'cat0008'
            ]
        ]);
    }
}
