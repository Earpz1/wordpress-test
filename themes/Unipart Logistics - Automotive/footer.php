<div class="container-fluid footer">
      <div class="row justify-content-center">
        <div class="col-8">
          <div class="row">
            <div class="col-3">
              <img src=<?php echo get_theme_file_uri('images/unipart_logo_colour.jpg');?> width="75%" alt="Unipart Logo" />
            </div>
            <div class="col-3 d-flex flex-column">
              <div>
                <p>Unipart Group Site Map</p>
                <?php wp_nav_menu(array(
                  'theme_location' => 'footerSiteMap'
                )); ?>
              </div>
              <div>
                <p>Unipart Divisions</p>
                <ul>
                  <li>Unipart Logisitcs</li>
                  <li>Unipart Rail</li>
                  <li>Unipart Manufacturing</li>
                  <li>Unipart Consultancy</li>
                  <li>Unipart International Companies</li>
                  <li>Unipart Technologies Group</li>
                  <li>Unipart Signite</li>
                </ul>
              </div>
            </div>

            <div class="col-3 d-flex flex-column">
              <div>
                <p>Legal</p>
                <ul>
                  <li>Group Tax Strategy</li>
                  <li>Gender Pay Report 2023</li>
                  <li>Human Rights Policy</li>
                  <li>Privacy Policy</li>
                  <li>Terms & Conditions</li>
                  <li>Anti Bribery and Corruption Policy</li>
                  <li>Criminal Finances Act 2017 Policy</li>
                  <li>Environmental Policy</li>
                  <li>Prompt Payment Code</li>
                  <li>Media enquiries for Unipart</li>
                </ul>
              </div>
            </div>

            <div class="col-3 d-flex flex-column">
              <div>
                <p>Contacts</p>
                <ul>
                  <li>General Enquiries</li>
                  <li>Human Resources</li>
                  <li>Media Enquiries</li>
                  <li>+44 (0)1865 778 966</li>
                  <li>Find us</li>
                </ul>
              </div>
              <div>
                <p>Social</p>
                <div class="d-flex justify-content-start">
                  <img src=<?php echo get_theme_file_uri('images/social_icons/youtube.png');?> width="40px" height="30px" style="margin-right: 30px" alt="YouTube" />
                  <img src=<?php echo get_theme_file_uri('images/social_icons/linkedin.png');?> width="35px" height="35px" style="margin-right: 30px" alt="LinkedIn" />
                  <img src=<?php echo get_theme_file_uri('images/social_icons/x.svg');?> width="35px" alt="X" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row justify-content-center footer-bottom align-items-center">
        <div class="col-8">
          <div class="row">
            <div class="col-6">&copy; Unipart Group</div>
            <div class="col-6 d-flex justify-content-end"><span style="text-decoration: underline; margin-right: 15px">Terms and Conditions</span> | <span style="text-decoration: underline; margin-left: 15px">Privacy Policy </span></div>
          </div>
        </div>
      </div>
    </div>
<?php wp_footer(); ?>
</body>
</html>