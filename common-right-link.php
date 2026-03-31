<ul class="project-link-bg">
  <li>
    <a href="tel:+919606999394">
      <span><i class="fa-solid fa-phone-volume"></i></span>
      <!-- <p>Call us</p> -->
    </a>
  </li>
  <li>
     <a href="#" id="whatsappShare" title="Share">
       <span> <i class="fa-solid fa-share-nodes"></i></span>
      <!-- <p>share</p> -->
    </a>
  </li>
  <li>
     <a href="#nogo" data-bs-toggle="modal" data-bs-target=".project-enquiry-modal">
      <span>  <i class="fa-regular fa-paper-plane"></i></span>
    <!-- <p>Enquiry</p> -->
    </a>
  </li>
</ul>

        <script>
        document.getElementById("whatsappShare").addEventListener("click", function() {
            const websiteURL = "https://demo5.chillipages.com/SMC/"; // Replace with your website URL
            const message = `${websiteURL}`;
            const whatsappURL = `https://api.whatsapp.com/send?text=${encodeURIComponent(message)}`;

            // Open the WhatsApp share link in a new tab
            window.open(whatsappURL, '_blank');
        });
        </script>