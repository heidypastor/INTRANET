const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
	.combine([
    			'node_modules/datatables.net-dt/css/jquery.dataTables.css',
    			'node_modules/datatables.net-autofill-dt/css/autoFill.dataTables.css',
    			'node_modules/datatables.net-buttons-dt/css/buttons.dataTables.css',
    			'node_modules/datatables.net-colreorder-dt/css/colReorder.dataTables.css',
    			'node_modules/datatables.net-fixedcolumns-dt/css/fixedColumns.dataTables.css',
    			'node_modules/datatables.net-fixedheader-dt/css/fixedHeader.dataTables.css',
    			'node_modules/datatables.net-keytable-dt/css/keyTable.dataTables.css',
    			'node_modules/datatables.net-responsive-dt/css/responsive.dataTables.css',
    			/*'node_modules/datatables.net-rowgroup-dt/css/rowGroup.dataTables.css',*/
    			/*'node_modules/datatables.net-rowreorder-dt/css/rowReorder.dataTables.css',*/
    			'node_modules/datatables.net-scroller-dt/css/scroller.dataTables.css',
    			'node_modules/datatables.net-select-dt/css/select.dataTables.css'
    		], 'public/css/datatable-depen.css')
    .combine([
    			'node_modules/datatables.net-plugins/features/searchHighlight/dataTables.searchHighlight.css'
    		], 'public/css/datatable-plugins.css')

    .scripts([
     			'node_modules/datatables.net/js/jquery.dataTables.js',
     			'node_modules/datatables.net-dt/js/dataTables.dataTables.js',
     			'node_modules/datatables.net-autofill/js/dataTables.autoFill.js',
     			'node_modules/datatables.net-buttons/js/dataTables.buttons.js',
     			'node_modules/datatables.net-buttons/js/buttons.html5.js',
     			'node_modules/datatables.net-buttons/js/buttons.flash.js',
     			'node_modules/datatables.net-buttons/js/buttons.colVis.js',
     			'node_modules/datatables.net-buttons/js/buttons.print.js',
     			'node_modules/datatables.net-colreorder/js/dataTables.colReorder.js',
     			'node_modules/datatables.net-fixedcolumns/js/dataTables.fixedColumns.js',
     			'node_modules/datatables.net-fixedheader/js/dataTables.fixedHeader.js',
     			'node_modules/datatables.net-keytable/js/dataTables.keyTable.js',
     			'node_modules/datatables.net-responsive/js/dataTables.responsive.js',
     			/*'node_modules/datatables.net-rowgroup/js/dataTables.rowGroup.js',*/
     			'node_modules/datatables.net-scroller/js/dataTables.scroller.js',
     			'node_modules/datatables.net-select/js/dataTables.select.js',
     		], 'public/js/datatable-depen.js')
    .scripts([
     			// 'node_modules/datatables.net-plugins/pagination/input.js',
     			// 'node_modules/datatables.net-plugins/filtering/row-based/range_dates.js',
     			// 'node_modules/datatables.net-plugins/filtering/row-based/range_numbers.js',
     			'node_modules/datatables.net-plugins/features/searchHighlight/dataTables.searchHighlight.js'
     		], 'public/js/datatable-plugins.js');
    .combine([
                'node_modules/@fortawesome/fontawesome-free/css/all.css'
            ], 'public/css/all.css')
    .scripts([
                'node_modules/@fortawesome/fontawesome-free/js/all.js'
            ], 'public/js/dependencias.js')