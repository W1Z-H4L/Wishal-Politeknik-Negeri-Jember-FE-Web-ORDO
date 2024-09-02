<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Haven Project</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />


</head>

<body>
    <header>

        <div class="logo">
            <img src="{{ asset('assets/images/logobenar.png') }}" alt="Green Haven Project Logo">
        </div>
        <nav>
            <ul>
                <li><a href="#about" class="nav-link">About Green Haven</a></li>
                <li><a href="#event-summary" class="nav-link">Event Details</a></li>
                <li><a href="#sponsor" class="nav-link">Our Sponsors</a></li>
                <li><a href="#leaderboard" class="nav-link">Leaderboard</a></li>
            </ul>
        </nav>
        <button class="cta-button">Plant a Mangrove</button>

    </header>

    <section class="home" id="leaderboard">
        <div class="row">
            <div class="col-6">
                <div class="col-5 round">
                    <p>Green Haven Project - Mangrove</p>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h1>Green Horizons Await, Join Us in Planting 10,000 Mangroves!</h1>
                    </div>
                    <div class="custom-container">
                        <div class="row shadow bg-white rounded d-flex justify-content-center align-items-center"
                            style="height: 100%;">
                            <div class="col-2 col-2-center">
                                <img src="{{ asset('assets/images/mangrove.jpg') }}" alt="Mangrove"
                                    class="mangrove-img">
                            </div>
                            <div class="col-5 col-2-center">
                                <span class="text-green">5690</span>
                                <span class="text-small">/1000 Pohon</span>
                            </div>
                            <div class="col-5 col-2-center">
                                <button class="btn-custom d-flex align-items-center ">
                                    Support Our Mission
                                    <i class="material-symbols-outlined ms-2">
                                        arrow_forward_ios
                                         </i>
                                </button>
                            </div>
                            <div class="col-12">
                                <div class="progres "></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-12-bg">
                        <!-- Konten lainnya -->
                    </div>
                </div>
            </div>

            <div class="col-6">
                <h2>Leaderboard</h2>
                <div class="row" style="margin-bottom: 20px;">
                    <div class="col-3 round-green">
                        <p>Most Donation</p>
                    </div>
                    <div class="col-3 round">
                        <p>Most Recent</p>
                    </div>
                </div>

                <div class="row row-centered">
                    <div class="col-1">
                        <div class="circle">
                            01
                        </div>
                    </div>
                    <div class="col-2 ">
                        <div class="mangrove-logo">
                        </div>
                    </div>
                    <div class="col-6 title-subtitle-container">

                        <div class="subtitle">Mangrove Maven</div>
                        <div class="title">Budi Hartanto</div>
                    </div>
                    <div class="col-1">
                        <div class="mangrove-icon">
                        </div>
                    </div>
                    <div class="col-2 number-text-container">
                        <div class="number">350</div>
                        <span class="text">Pohon</span>
                    </div>

                </div>
                <div class="row row-centered">
                    <div class="col-1">
                        <div class="circle">
                            02
                        </div>
                    </div>
                    <div class="col-2 ">
                        <div class="mangrove-logo">
                        </div>
                    </div>
                    <div class="col-6 title-subtitle-container">

                        <div class="subtitle">Mangrove Maven</div>
                        <div class="title">Dewi Sartika</div>
                    </div>
                    <div class="col-1">
                        <div class="mangrove-icon">
                        </div>
                    </div>
                    <div class="col-2 number-text-container">
                        <div class="number">330</div>
                        <span class="text">Pohon</span>
                    </div>
                </div>

                <div class="row row-centered">

                    <div class="col-1">
                        <div class="circle">
                            03
                        </div>
                    </div>
                    <div class="col-2 ">
                        <div class="mangrove-logo">
                        </div>
                    </div>
                    <div class="col-6 title-subtitle-container">

                        <div class="subtitle">Mangrove Maven</div>
                        <div class="title">Eko Wahyudi</div>
                    </div>
                    <div class="col-1">
                        <div class="mangrove-icon">
                        </div>
                    </div>
                    <div class="col-2 number-text-container">
                        <div class="number">200</div>
                        <span class="text">Pohon</span>
                    </div>

                </div>
                <div class="row row-centered">

                    <div class="col-1">
                        <div class="circle" style="background-color: #85BB50">
                           04
                        </div>
                    </div>
                    <div class="col-2 special-mangrove">
                        <div class="mangrove-logo">
                        </div>
                    </div>
                    <div class="col-6 title-subtitle-container">

                        <div class="subtitle">Guardian of the Grove</div>
                        <div class="title">Rina Kartika</div>
                    </div>
                    <div class="col-1">
                        <div class="mangrove-icon">
                        </div>
                    </div>
                    <div class="col-2 number-text-container">
                        <div class="number">190</div>
                        <span class="text">Pohon</span>
                    </div>

                </div>
                <div class="row row-centered">

                    <div class="col-1">
                        <div class="circle" style="background-color: #A7CC05">
                            05
                        </div>
                    </div>
                    <div class="col-2 special-mangrove">
                        <div class="mangrove-logo">
                        </div>
                    </div>
                    <div class="col-6 title-subtitle-container">

                        <div class="subtitle">Guardian of the Grove</div>
                        <div class="title">Agus Prasetyo</div>
                    </div>
                    <div class="col-1">
                        <div class="mangrove-icon">
                        </div>
                    </div>
                    <div class="col-2 number-text-container">
                        <div class="number">140</div>
                        <span class="text">Pohon</span>
                    </div>

                </div>
                <div class="row row-centered">

                    <div class="col-1">
                        <div class="circle" style="background-color: #A7CC05">
                            06
                        </div>
                    </div>
                    <div class="col-2 master-logo">
                        <div class="mangrove-logo">
                        </div>
                    </div>
                    <div class="col-6 title-subtitle-container">

                        <div class="subtitle">Mangrove Master</div>
                        <div class="title">Irfan Setiawan</div>
                    </div>
                    <div class="col-1">
                        <div class="mangrove-icon">
                        </div>
                    </div>
                    <div class="col-2 number-text-container" >
                        <div class="number">320</div>
                        <span class="text">Pohon</span>
                    </div>


                </div>
            </div>
        </div>
    </section>

    <section class="sponsors">
        <div class="container">
            <div class="sponsors">
                <img src="{{ asset('assets/images/jala.png') }}" alt="JALA">
                <img src="{{ asset('assets/images/efishery.png') }}" alt="eFishery">
                <img src="{{ asset('assets/images/azarine.png') }}" alt="Azarine">
                <img src="{{ asset('assets/images/kompas.png') }}" alt="Kompas">
                <img src="{{ asset('assets/images/tribunnews.png') }}" alt="Tribunnews">
                <img src="{{ asset('assets/images/jawapos.png') }}" alt="Jawa Pos">
            </div>
        </div>
    </section>

    <section class="about" id="about">
        <div class="logo-container">
            <img src="{{ asset('assets/images/polygon2.png') }}" alt="polygon1" class="logo">
            <img src="{{ asset('assets/images/polygon1.png') }}" alt="polygon2" class="logo">
        </div>
        <div class="container">

            <div class="about-header">
                <h2>About Green Haven Project</h2>
                <p>The Green Haven Project - Mangrove aims to restore coastal ecosystems and raise awareness by planting
                    mangroves and educating participants about the importance of these areas. This six-hour event will
                    involve JCI members, local farmers, and students, focusing on combating beach erosion and promoting
                    ESG values.</p>
            </div>
            <div class="transformation">
                <div class="before">
                    <img src="{{ asset('assets/images/before.png') }}" alt="Before mangroves were planted">
                    <p>Before mangroves were planted</p>
                </div>
                <div class="transformation-arrow">
                    <img src="{{ asset('assets/images/panah.png') }}" alt="Transformation arrow">
                </div>
                <div class="after">
                    <img src="{{ asset('assets/images/after.png') }}" alt="After mangroves were planted">
                    <p>After mangroves were planted</p>
                </div>
            </div>
        </div>
    </section>

    <section id="event-summary" class="event-summary">
        <div class="container">
            <div class="event-header text-center">
                <h2 class="event-title">Event Summary</h2>
                <p class="event-subtitle">
                    We give you a brief overview of the event to give you a glimpse of what we're doing in the Green Haven Project,
                    download the detailed PDF to see how you can get involved.
                </p>
            </div>
            <div class="event-main d-flex align-items-center">
                <div class="event-details col-lg-6">
                    <div class="event-date-time">
                        <p class="event-date">26/04/2024</p>
                        <p class="event-time">08:00 - 11:00 WIB</p>
                    </div>
                    <p class="event-description">
                        Join the impactful journey of planting mangroves, where you'll learn, collaborate with locals, earn recognition,
                        and share your story through media coverage.
                    </p>
                    <button class="btn-custom d-flex align-items-center">
                        <img src="{{ asset('assets/images/icon_file.png') }}"  alt="Icon" class="btn-icon">
                        View Event Details
                    </button>
                </div>
                <div class="event-image col-lg-6">
                    <div class="image-wrapper">
                        <img src="{{ asset('assets/images/gambar2.png') }}" alt="Event Image">
                        <div class="carousel-controls">
                            <button class="prev">&lt;</button>
                            <button class="next">&gt;</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="event-steps d-flex justify-content-between">
                <div class="step text-center">
                    <div class="step-container">
                    <div class="step-number">01</div>
                    <p>Introducing the beauty of mangroves on a journey to the planting site.</p>
                    </div>
                </div>
                <div class="step text-center">
                    <div class="step-container">
                    <div class="step-number">02</div>
                    <p>Working together with local farmers while planting each mangrove.</p>
                </div>
                </div>
                <div class="step text-center">
                    <div class="step-container">
                    <div class="step-number">03</div>
                    <p>Exploring the wonders of mangrove ecotourism, an educational adventure.</p>
                    </div>
                </div>
                <div class="step text-center">
                    <div class="step-container">
                    <div class="step-number">04</div>
                    <p>Receive a plaque & badge, a mark of honor for every tree you plant.</p>
                    </div>
                </div>
                <div class="step text-center">
                    <div class="step-container">
                    <div class="step-number">05</div>
                    <p>Coverage & documentation by news media, share your story of change!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sponsorship-packages" id="sponsor">
        <h2>Sponsorship Packages</h2>
        <div class="container">

            <p>Our sponsorship package offers branding, promotional opportunities, and visibility at our event, ideal for enhancing company presence and community engagement.</p>

            <!-- Personal Sponsorship Package -->
            <div class="table-section">
                <h3>Personal Sponsorship Package</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Membership Tier</th>
                            <th>Min. Seeds</th>
                            <th>Min. Buy</th>
                            <th>Benefits</th>
                            <th>Donors</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="text-align: left">
                                <img src="{{ asset('assets/images/seedling.png') }}" alt="Logo" class="logo-table">
                                Seedling Scout
                            </td>
                            <td>5 Seeds</td>
                            <td>IDR 75K</td>
                            <td>Badge</td>
                            <td>4,900 Donors</td>
                            <td>
                            <a href="#" class="btn d-flex align-items-center">
                                Support Our Mission
                                <i class="material-symbols-outlined ms-2">arrow_forward_ios</i>
                            </a>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: left">
                                <img src="{{ asset('assets/images/icon_master.png') }}" alt="Logo" class="logo-table">
                                Sapling Sower
                            </td>
                            <td>10 Seeds</td>
                            <td>IDR 150K</td>
                            <td>Badge + Pin</td>
                            <td>4,300 Donors</td>
                            <td>
                                <a href="#" class="btn d-flex align-items-center">
                                    Support Our Mission
                                    <i class="material-symbols-outlined ms-2">arrow_forward_ios</i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: left">
                                <img src="{{ asset('assets/images/titan.png') }}" alt="Logo" class="logo-table">
                                Tree Titan</td>
                            <td>20 Seeds</td>
                            <td>IDR 300K</td>
                            <td>Badge + Pin</td>
                            <td>15,000 Donors</td>
                            <td>
                                <a href="#" class="btn d-flex align-items-center">
                                    Support Our Mission
                                    <i class="material-symbols-outlined ms-2">arrow_forward_ios</i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: left">
                                <img src="{{ asset('assets/images/master.png') }}" alt="Logo" class="logo-table">
                                Mangrove Master</td>
                            <td>50 Seeds</td>
                            <td>IDR 750K</td>
                            <td>Badge + Pin + Bag</td>
                            <td>5,000 Donors</td>
                            <td>
                                <a href="#" class="btn d-flex align-items-center">
                                    Support Our Mission
                                    <i class="material-symbols-outlined ms-2">arrow_forward_ios</i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: left">
                                <img src="{{ asset('assets/images/icon_pohon.png') }}" alt="Logo" class="logo-table">
                                Guardian Of The Grove</td>
                            <td>100 Seeds</td>
                            <td>IDR 1,500K</td>
                            <td>Badge + Pin + Bag</td>
                            <td>300 Donors</td>
                            <td>
                                <a href="#" class="btn d-flex align-items-center">
                                    Support Our Mission
                                    <i class="material-symbols-outlined ms-2">arrow_forward_ios</i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: left">
                                <img src="{{ asset('assets/images/icon_magrove.png') }}" alt="Logo" class="logo-table">
                                Mangrove Maven</td>
                            <td>200 Seeds</td>
                            <td>IDR 3,000K</td>
                            <td>Badge + Pin + Bag</td>
                            <td>10 Donors</td>
                            <td>
                                <a href="#" class="btn d-flex align-items-center">
                                    Support Our Mission
                                    <i class="material-symbols-outlined ms-2">arrow_forward_ios</i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Corporate Sponsorship Package -->
            <div class="table-section highlight-last-row">
                <h3>Corporate Sponsorship Package</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Benefits</th>
                            <th>Eco Trailblazers</th>
                            <th>Green Innovators</th>
                            <th>Eco Vanguard</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Price</td>
                            <td>15 Million IDR</td>
                            <td>30 Million IDR</td>
                            <td>45 Million IDR</td>
                        </tr>
                        <tr>
                            <td>CO2 Sequestration</td>
                            <td>22.5 ton/year</td>
                            <td>45 ton/year</td>
                            <td>67.5 ton/year</td>
                        </tr>
                        <tr>
                            <td>Number of Trees</td>
                            <td>1000 Trees</td>
                            <td>2000 Trees</td>
                            <td>3000 Trees</td>
                        </tr>
                        <tr>
                            <td>Logo on JCI Banner</td>
                            <td>&#10003;</td>
                            <td>&#10003;</td>
                            <td>&#10003;</td>
                        </tr>
                        <tr>
                            <td>Logo on Communal Stainless Plate</td>
                            <td>&#10003;</td>
                            <td>&#10003;</td>
                            <td>&#10003;</td>
                        </tr>
                        <tr>
                            <td>Considered as Main Sponsor</td>
                            <td>&#10003;</td>
                            <td>&#10003;</td>
                            <td>&#10003;</td>
                        </tr>
                        <tr>
                            <td>Dedicated Stainless Plate</td>
                            <td></td>
                            <td>&#10003;</td>
                            <td>&#10003;</td>
                        </tr>
                        <tr>
                            <td>Report Update on Planted Trees</td>
                            <td></td>
                            <td>&#10003;</td>
                            <td>&#10003;</td>
                        </tr>
                        <tr>
                            <td style="color:white">Logo on Event Clothing</td>
                            <td>
                                <a href="#" class="btn-green">
                                    Support Our Mission
                                    <i class="material-symbols-outlined ms-2">arrow_forward_ios</i>
                                </a>
                            </td>
                            <td>
                                <a href="#" class="btn-green">
                                    Support Our Mission
                                    <i class="material-symbols-outlined ms-2">arrow_forward_ios</i>
                                </a>
                                </td>
                                <td>
                                    <a href="#" class="btn-green">
                                        Support Our Mission
                                        <i class="material-symbols-outlined ms-2">arrow_forward_ios</i>
                                    </a>
                                </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section class="donate-section">
        <div class="donate-content">
            <h2>Donate Today and be a Guardian of the Green Belt.</h2>
            <p>Join us in our mission to rejuvenate and protect our shorelines by donating to our mangrove planting project.</p>
            <td>
                <a href="#" class="donate-btn">
                    Support Our Mission
                    <i class="material-symbols-outlined ms-2">arrow_forward_ios</i>
                </a>
            </td>
        </div>
        <div class="image-gallery">
            <img src="{{ asset('assets/images/foto1.png') }}" alt="Mangrove Image 1">
            <img src="{{ asset('assets/images/foto2.png') }}" alt="Mangrove Image 2">
            <img src="{{ asset('assets/images/foto3.png') }}" alt="Mangrove Image 3">
            <img src="{{ asset('assets/images/foto4.png') }}" alt="Mangrove Image 4">
            <img src="{{ asset('assets/images/foto5.png') }}" alt="Mangrove Image 5">
        </div>
    </section>

    <footer>
        <div class="footer">
            <p>Nama yang Mengerjakan Test : <span>Wishal Azharyan Al Hisyam</span></p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
