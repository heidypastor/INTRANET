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
                'node_modules/datatables.net-rowgroup-dt/css/rowGroup.dataTables.css',
                'node_modules/datatables.net-rowreorder-dt/css/rowReorder.dataTables.css',
                'node_modules/datatables.net-scroller-dt/css/scroller.dataTables.css',
                'node_modules/datatables.net-select-dt/css/select.dataTables.css'
    		], 'public/css/datatable-depen.css')
    .combine([
    			'resources/css/white-dashboard.css'
            ], 'public/white/css/white-dashboard.css')
    .combine([
    			'node_modules/datatables.net-plugins/features/searchHighlight/dataTables.searchHighlight.css'
    		], 'public/css/datatable-plugins.css')
    .combine([
                'node_modules/@fortawesome/fontawesome-free/css/all.css',
            ], 'public/css/all.css')
    .combine([
                'node_modules/select2/dist/css/select2.css',
            ], 'public/css/select2.css')
    .combine([
                'resources/css/stilospersonalizados.css'
            ], 'public/css/personalizados.css')
    .combine([
                'node_modules/slider-pro/dist/css/slider-pro.css'
            ], 'public/css/sliderPro.css')
    .combine([
                'node_modules/@fullcalendar/core/main.css',
                'node_modules/@fullcalendar/daygrid/main.css',
                'node_modules/@fullcalendar/timegrid/main.css'
            ], 'public/css/fullcalendar.css')
    .scripts([
                'node_modules/@fortawesome/fontawesome-free/js/all.js'
            ], 'public/js/dependencias.js')
    .scripts([
                'node_modules/select2/dist/js/select2.full.js'
            ], 'public/js/select2.js')
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
                'node_modules/datatables.net-rowgroup/js/dataTables.rowGroup.js',
                'node_modules/datatables.net-scroller/js/dataTables.scroller.js',
                'node_modules/datatables.net-select/js/dataTables.select.js',
                'node_modules/datatables.net-dt/js/jquery.dataTables.js',
                'node_modules/datatables.net-autofill-dt/js/autoFill.dataTables.js',
                'node_modules/datatables.net-buttons-dt/js/buttons.dataTables.js',
                'node_modules/datatables.net-colreorder-dt/js/colReorder.dataTables.js',
                'node_modules/datatables.net-fixedcolumns-dt/js/fixedColumns.dataTables.js',
                'node_modules/datatables.net-fixedheader-dt/js/fixedHeader.dataTables.js',
                'node_modules/datatables.net-keytable-dt/js/keyTable.dataTables.js',
                'node_modules/datatables.net-responsive-dt/js/responsive.dataTables.js',
                'node_modules/datatables.net-rowgroup-dt/js/rowGroup.dataTables.js',
                'node_modules/datatables.net-rowreorder-dt/js/rowReorder.dataTables.js',
                'node_modules/datatables.net-scroller-dt/js/scroller.dataTables.js',
                'node_modules/datatables.net-select-dt/js/select.dataTables.js'
            ], 'public/js/datatable-depen.js')
    .scripts([
                // 'node_modules/datatables.net-plugins/pagination/input.js',
                // 'node_modules/datatables.net-plugins/filtering/row-based/range_dates.js',
                // 'node_modules/datatables.net-plugins/filtering/row-based/range_numbers.js',
                'resources/js/jquery.highlight.js',
                'node_modules/datatables.net-plugins/features/searchHighlight/dataTables.searchHighlight.js'
            ], 'public/js/datatable-plugins.js')
    .scripts([
                'resources/js/particulas.js'
            ], 'public/js/particulas.js')
    .scripts([
                'resources/js/particles.js'
            ], 'public/js/particles.js')
    .scripts([
                'resources/js/scriptspersonalizados.js'
            ], 'public/js/all.js')
    .scripts([
                'node_modules/@fullcalendar/core/main.js',
                'node_modules/@fullcalendar/daygrid/main.js',
                'node_modules/@fullcalendar/timegrid/main.js',
                'node_modules/@fullcalendar/interaction/main.min.js',
                'node_modules/@fullcalendar/core/locales/es.js'
            ], 'public/js/fullcalendar.js')
    .scripts([
                'node_modules/slider-pro/dist/js/jquery.sliderPro.js'
            ], 'public/js/sliderPro.js')
    .copyDirectory([
                'node_modules/@fortawesome/fontawesome-free/webfonts'
            ], 'public/webfonts');
