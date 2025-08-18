<div class="container-fluet prayer-time-section">
    <div class="background-color">
    <div class="container  py-4" >
        <!-- Top Section -->
        <div class="top-box">
            <div class="left-date">
                <div>৪ সফর</div>
                <div>বুধবার - ৩০ জুলাই</div>
                <div>১৫ শ্রাবণ</div>
            </div>
            <div class="sun-info">
                <div><i class="fas fa-sun"></i></div>
                <div>৫:২৭ সূর্যোদয়</div>
                <div>৬:৪২ সূর্যাস্ত</div>
            </div>
        </div>

        <!-- Content Section -->
        <div class="content-box">
            <!-- Left -->
            <div class="left-section text-center">
                <h5>ইশা ও তাহাজ্জুদ</h5>
                <div>ওয়াক্ত শেষ হতে বাকি</div>
                <div class="countdown-circle" id="countdown">০৫:২২:২০</div>
            </div>

            <!-- Right -->
            <div class="right-section">
                <div class="prayer-time-row">
                    <span><i class="fas fa-moon"></i>ফজর</span>
                    <span>৪:০৫ - ৫:২৬</span>
                </div>
                <div class="prayer-time-row">
                    <span><i class="fas fa-sun"></i>যুহর</span>
                    <span>১২:৫৮ - ৪:৪২</span>
                </div>
                <div class="prayer-time-row">
                    <span><i class="fas fa-cloud-sun"></i>আসর <i class="fas fa-info-circle text-danger"></i></span>
                    <span>৪:৪৩ - ৬:৪১</span>
                </div>
                <div class="prayer-time-row">
                    <span><i class="fas fa-moon"></i>মাগরিব</span>
                    <span>৬:৪৫ - ৮:০৪</span>
                </div>
                <div class="isha-row">
                    <i class="fas fa-star"></i> ইশা: ৮:০৫ - ৪:০৪
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript Countdown -->
    <script>
        const countdownEl = document.getElementById("countdown");
        let hours = 5, minutes = 22, seconds = 20;

        function updateCountdown() {
            seconds--;
            if (seconds < 0) {
                seconds = 59;
                minutes--;
                if (minutes < 0) {
                    minutes = 59;
                    hours--;
                }
            }

            if (hours < 0) {
                hours = 0;
                minutes = 0;
                seconds = 0;
            }

            countdownEl.textContent =
                String(hours).padStart(2, '0') + ":" +
                String(minutes).padStart(2, '0') + ":" +
                String(seconds).padStart(2, '0');
        }

        setInterval(updateCountdown, 1000);
    </script>
  

</div>
</div>