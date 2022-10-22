
            <!-- <=========== main ==========> -->
    <main>
      <!-- <============ first section ==========> -->
      <section class="first">
        <div class="hero_continar">
          <!-- <======== back shadow =======> -->
          <img
            src="images/1st_black_line.svg"
            width="100%"
            alt="shadow" loading="lazy"
          />
          <!-- <======== hero section =======> -->
          <div class="Hero_Section">
            <!-- <======== left hero side =======> -->
            <div class="left">
              <h1>Hire Best Reliable Packers and Movers in <?php echo $city; ?></h1>
              <p>
                Shift your lovely Home or office with us to get fast delivery
                and 100% Luggage's safety at Lowest Price.
              </p>

              <div class="feature">
                <p>
                  <img src="images/chack_icon.png" alt="checkmark icon" loading="lazy"/><span
                    >Free Quotation
                  </span>
                </p>

                <p>
                  <img src="images/chack_icon.png" alt="checkmark icon" loading="lazy"/><span
                    >Lowest Cost Guaranted
                  </span>
                </p>

                <p>
                  <img src="images/chack_icon.png" alt="checkmark icon" loading="lazy"/><span
                    >100% Luggage's Safety
                  </span>
                </p>

                <p>
                  <img src="images/chack_icon.png" alt="checkmark icon" loading="lazy"/><span
                    >Live Tracking
                  </span>
                </p>
              </div>
            </div>

            <!-- <===========blackshdow=========> -->
            <img src="images/2nd_black_line.svg" alt="background shadow" width="100%" loading="lazy"/>

            <!-- <======== right hero side =======> -->
            <div class="right">
              <form action="mail.php" method="post">
                <div class="inputs">
                  <h2>Get Lowest rate for you moving</h2>
                  <input
                    type="name"
                    name="name"
                    id="name"
                    placeholder="Name"
                    required
                  />
                  <input
                    type="number"
                    name="PhoneNumber"
                    id="PhoneNumber"
                    placeholder="Mobile Number"
                    pattern="[0-9]{10}"
                  />
                  <select name="whatmoving" id="movingitem">
                    <option value="Selectitems">
                      -- What you want to move --
                    </option>
                    <option value="Household">Household</option>
                    <option value="Office">Office</option>
                    <option value="Vehicle">Vehicle</option>
                    <option value="Someitem">Someitem</option>
                  </select>
                  <input
                    type="text"
                    name="reloctionFrom"
                    id="reloctionFrom"
                    placeholder="Relocation From"
                  />
                  <input
                    type="text"
                    name="reloctionto"
                    id="reloctionto"
                    placeholder="Relocation To"
                  />
                  <input type="submit" value="Get Free Quote" />
                  <p class="teramandcondition">
                    By Sumbitting this, you agree to the
                    <span> <a href="javascript:void(0)"> privacy policy</a></span> &
                    <span> <a href="javascript:void(0)"> teram and conditions</a></span>
                  </p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>

      
      <!-- <============= fixd call button ============> -->
      <div class="custom_call">
        <div class="call-animation">
          <a href="tel:+919817326797">
            <button class="custom_call_btn" onclick="custom_call()">
              <img
                src="images/callanimation.svg"
                width="20px"
                alt="call button" loading="lazy"
              />
            </button>
          </a>
        </div>
      </div>

      <!-- <============= second section =================> -->
      <section class="second">
        <img src="images/Background_why-choose.svg" alt="backgraund" loading="lazy"/>
        <div class="Why-choose">
          <h2>Why Choose Us</h2>
          <h3>We are well equipped with quality services and years of experience. Our exceptional factors made us preferred moving Company over others.</h3>
          <div class="Why-choose_flex">
            <div class="service_icons">
              <img src="images/WC_1st.png" alt="saving cost icon" loading="lazy"/>
              <h4>Low Cost Guarantee</h4>
              <p>
                <!-- You don't have to go for an expensive moving service.  -->
                It is our commitment to offer a low-cost guarantee. We are aimed at reaching every customer through affordability.
              </p>
            </div>
            <div class="service_icons">
              <img
                src="images/WC_2nd.png"
                alt="Luggage's Safety" loading="lazy"
              />
              <h4>100% Luggage's Safety</h4>
              <p>
                The packers mover <?php echo $city; ?> are experts in developing the packing materials to ensure 100% safety.
                <!-- We have designed carton boxes to protect your household from scratch and crack. -->
              </p>
            </div>
            <div class="service_icons">
              <img src="images/WC_3rd.png" alt="Fast Moving truck icon" loading="lazy"/>
              <h4>Fast Moving Service</h4>
              <p>
                If you are looking for a Fast moving service, The packers movers <?php echo $city; ?> is here for you. It is not our ethics to delay your move. We respect your time as you do.
                <!-- If you are looking for a punctual company with Fast moving service, The packers movers delhi is here for you. It is not our ethics to delay your moving. We  respect your time as you do. -->
              </p>
            </div>
            <div class="service_icons">
              <img src="images/WC_4th.png" alt="Safety user icon" loading="lazy"/>
              <h4>Well-Experienced Staff</h4>
              <p>
                The secret of our quality and fast-moving service is our well-experienced staff. With the experience of 107+ moving per month, 
                <!-- Our staff is very professional and skilled in their work. -->
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- <=============== threed section ============> -->
      <section class="threed" id="work">
        <div class="threed_section">
          <img src="images/Background_how-work.svg" alt="backgrand" loading="lazy"/>
          <h2>How do Packers Movers Works in <?php echo $city; ?></h2>
          <span class="underline"></span>
          <p>
            The Packers Movers <?php echo $city; ?> has a standard working process. We are a professional moving company and take our services very Carefully.
          </p>
          <div class="process">
            <div class="process1st">
              <img src="images/HW_1st.png" alt="packers and movers service" loading="lazy"/>
              <div class="serialNo">
                <img src="images/HW_no1st.svg" alt="No 1 icon" loading="lazy"/>
              </div>
              <h3>Free Pre-Moving Survey</h3>
              <p>
                When you finalize a moving deal, our supervisor will do an inspection and Quality Check of your moving goods. They will suggest any precautions if needed.
              </p>
            </div>
            <div class="process2nd">
              <img src="images/HW_2nd.png" alt="packing and moving" loading="lazy"/>
              <div class="serialNo">
                <img src="images/HW_no2nd.svg" alt="No 2 icon" loading="lazy"/>
              </div>
              <h3>Packing & Loading of Goods</h3>
              <p>
                Our Staff will arrive 2 hours earlier on the decided moving day. They will pack your goods carefully, load it on the truck, and deliver it to your destination.
              </p>
            </div>
            <div class="process3rd">
              <img src="images/HW_3rd.png" alt="best packers and movers " loading="lazy"/>
              <div class="serialNo">
                <img src="images/HW_no3rd.svg" alt="No 3 icon" loading="lazy"/>
              </div>
              <h3>Unloading & Unpacking of Goods</h3>
              <p>
                After reaching your destination on time, our team will unload and unpack your household goods. That's how our experienced team will pull off moving quickly.
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- <================= forth section ==============> -->
      <section class="forth">
        <div class="services">
          <h2>Our Services</h2>
          <p>
            TPMD is offering various moving services at affordable prices. We are determined to become helpful for every moving requirement.
          </p>
          <div class="service-flex">
            <div class="service-box">
              <img src="images/OS_1st.png" alt="best packing and moving" loading="lazy"/>
              <h3>Full Household Shifting</h3>
              <p>
                Our household shifting includes survey, Careful packing & loading arrangements, Quick transportation and unloading.
                <br>
                The Packers movers <?php echo $city; ?> provide shifting of 1BHK, 2BHK, 3BHK, Housing apartments, Urban Streets, and Mini-town houses.
              </p> 
            </div> 
            <div class="service-box">
              <img src="images/OS_2nd.png" alt="car transportation packers and movers" loading="lazy"/>
              <h3>Vehicle Shifting</h3>
              <p>
                The Packers movers <?php echo $city; ?> provide shifting of vehicles such as Bike, Car, Tractor, Scooter, etc.
                <br>
                our team can reach across villages, towns, districts, Cities, and states.
              </p>
            </div>
            <div class="service-box">
              <img src="images/OS_3rd.png" alt="office shifting packers and movers" loading="lazy"/>
              <h3>Office Shifting</h3>
              <p>
                Our office shifting includes inspection of office and disassembling electronic goods like printers, AC, water coolers, TV, etc.
                <br>
                The Packers movers <?php echo $city; ?> provide Shifting of Small shops, Early startups, large Organizations, and server rooms
              </p>
            </div>
          </div>
        </div>
      </section>
