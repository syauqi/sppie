<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        disable: function () {
            var maxWidth = 800;
            return window.innerWidth < maxWidth;
        }
    });
</script>

<script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous"></script>

@stack('script')

<script>
    window.onscroll = function () {
        const nav = document.querySelector(".navbar");
        if (!nav) {
            return false;
        }
        if (window.pageYOffset > 40) {
            nav.classList.add("nav-on-scroll");
        } else {
            nav.classList.remove("nav-on-scroll");
        }
    };
</script>
