<?= $this->extend('Layout/user_layout') ?>

<?= $this->section('title') ?>
Dashboard Perusahaan
<?= $this->endSection() ?>

<?= $this->section('head') ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="/css/profile.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.min.js"></script>

<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="hero-section">
    <div class="hero-text">
    </div>
    <img src="<?= base_url('images/Profile_user.png') ?>" alt="Naila Putri" class="profile-image">
</div>

<div class="profile-section">
    <div class="profile-card">
        <h3>Naila Putri Saraswati</h3>
        <h5>Food and Beverages Company</h5>
        <div class="location-company">
            <i class="fa-solid fa-location-dot"></i>
            <p>East Java, Indonesia</p>
        </div>

        <div class="social-icons">
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-tiktok"></i>
        </div>
    </div>
    <div class="company-information">
        <div class="contact-details">
            <h4>Contact Perusahaan</h4>
            <p>foodandbeverages@email.com</p>
            <p>+62 3321 4695 8997</p>
        </div>
        <div class="address-details">
            <h4>Alamat Perusahaan</h4>
            <p>Jalan Dahan GJ1 No D1/C23, Kedung Kandang</p>
            <p>Kota Malang, Jawa Timur, Indonesia</p>
        </div>
    </div>
    <div class="edit-profile-btn">
        <a href="<?= base_url('profile/edit') ?>" class="btn btn-primary">Edit Profile</a>
    </div>
</div>

<div class="content-profile">
    <div class="tab-container">
        <!-- Tabs Section -->
        <div class="tabs">
            <div class="tabs-btn">
                <a href="#" class="tab-button active" data-tab="legalitas">Legalitas</a>
            </div>
            <div class="tabs-btn">
                <a href="#" class="tab-button" data-tab="produk">Produk</a>
            </div>
            <div class="tabs-btn">
                <a href="#" class="tab-button" data-tab="sertifikasi">Sertifikasi</a>
            </div>
            <div class="tabs-btn">
                <a href="#" class="tab-button" data-tab="pengalaman-pameran">Pengalaman Pameran</a>
            </div>
            <div class="tabs-btn">
                <a href="#" class="tab-button" data-tab="pengalaman-ekspor">Pengalaman Ekspor</a>
            </div>
            <div class="tabs-btn">
                <a href="#" class="tab-button" data-tab="media-promosi">Media Promosi</a>
            </div>
            <div class="tabs-btn">
                <a href="#" class="tab-button" data-tab="pembinaan">Pembinaan</a>
            </div>
        </div>

        <div class="content">
            <!-- Legalitas Tab -->
            <div class="tab-content legalitas active">
                <h4>Legalitas Awal</h4>
                <div class="legalitas-before-content">
                    <div class="legalitas-grid">
                        <div class="content-before-content-one">
                            <?php if (!empty($legalitasSebelum)): ?>
                                <div id="pdf-viewer"></div>
                                <script>
                                    document.addEventListener("DOMContentLoaded", function() {
                                        const url = "<?= base_url('pdf/' . $legalitasSebelum) ?>";
                                        const renderPDF = async (url) => {
                                            const pdfjsLib = window['pdfjs-dist/build/pdf'];
                                            pdfjsLib.GlobalWorkerOptions.workerSrc = "https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.worker.min.js";
                                            const pdfDoc = await pdfjsLib.getDocument(url).promise;
                                            const pdfViewer = document.getElementById("pdf-viewer");
                                            for (let pageNum = 1; pageNum <= pdfDoc.numPages; pageNum++) {
                                                const page = await pdfDoc.getPage(pageNum);
                                                const canvas = document.createElement("canvas");
                                                const ctx = canvas.getContext("2d");
                                                const viewport = page.getViewport({
                                                    scale: 0.75
                                                });
                                                canvas.width = viewport.width;
                                                canvas.height = viewport.height;
                                                const renderContext = {
                                                    canvasContext: ctx,
                                                    viewport: viewport
                                                };
                                                await page.render(renderContext).promise;
                                                pdfViewer.appendChild(canvas);
                                            }
                                        };
                                        renderPDF(url);
                                    });
                                </script>
                            <?php else: ?>
                                <p>No PDF available for Legalitas Sebelum.</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <h4>Legalitas Akhir</h4>
                <div class="legalitas-before-content">
                    <div class="legalitas-grid">
                        <div class="content-before-content-one">
                            <?php if (!empty($legalitasSetelah)): ?>
                                <div id="pdf-viewer-akhir" style="height: 500px; overflow-y: scroll; border: 1px solid #ccc;"></div>
                                <script>
                                    document.addEventListener("DOMContentLoaded", function() {
                                        const urlAkhir = "<?= base_url('pdf/' . $legalitasSetelah) ?>";

                                        const renderPDFAkhir = async (url) => {
                                            const pdfjsLib = window['pdfjs-dist/build/pdf'];
                                            pdfjsLib.GlobalWorkerOptions.workerSrc = "https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.worker.min.js";

                                            const pdfDoc = await pdfjsLib.getDocument(url).promise;
                                            const pdfViewerAkhir = document.getElementById("pdf-viewer-akhir");

                                            for (let pageNum = 1; pageNum <= pdfDoc.numPages; pageNum++) {
                                                const page = await pdfDoc.getPage(pageNum);
                                                const canvas = document.createElement("canvas");
                                                const ctx = canvas.getContext("2d");

                                                const viewport = page.getViewport({
                                                    scale: 0.75
                                                });
                                                canvas.width = viewport.width;
                                                canvas.height = viewport.height;

                                                const renderContext = {
                                                    canvasContext: ctx,
                                                    viewport: viewport,
                                                };

                                                await page.render(renderContext).promise;

                                                pdfViewerAkhir.appendChild(canvas);
                                            }
                                        };

                                        renderPDFAkhir(urlAkhir);
                                    });
                                </script>
                            <?php else: ?>
                                <p>No PDF available for Legalitas Setelah.</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-content produk">
            <h4>Produk Awal</h4>
            <div class="produk-before-content">
                <div class="produk-grid">
                    <div class="produk-before-content-one">
                        <h5>Product Name: Smart Watch</h5>
                        <p><strong>Description:</strong> A feature-packed smartwatch with fitness tracking, heart rate monitoring, and customizable watch faces.</p>
                        <p><strong>Price:</strong> Rp 1,500,000</p>
                        <p><strong>Availability:</strong> In Stock</p>
                        <?php if (!empty($produkSebelum)): ?>
                            <div class="produk-sebelum">
                                <h5>Gambar Produk Sebelum</h5>
                                <img src="<?= base_url('images/' . $produkSebelum) ?>" alt="Produk Sebelum" style="max-width: 100%; height: auto;">
                            </div>
                        <?php else: ?>
                            <p>No image available for Produk Sebelum.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <h4>Produk Akhir</h4>
            <div class="produk-before-content">
                <div class="produk-grid">
                    <div class="produk-before-content-one">
                        <h5>Product Name: Wireless Earbuds</h5>
                        <p><strong>Description:</strong> High-quality wireless earbuds with noise cancellation and long battery life.</p>
                        <p><strong>Price:</strong> Rp 850,000</p>
                        <p><strong>Availability:</strong> Out of Stock</p>
                        <?php if (!empty($produkSetelah)): ?>
                            <div class="produk-setelah">
                                <h5>Gambar Produk Setelah</h5>
                                <img src="<?= base_url('images/' . $produkSetelah) ?>" alt="Produk Setelah" style="max-width: 100%; height: auto;">
                            </div>
                        <?php else: ?>
                            <p>No image available for Produk Setelah.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content sertifikasi">
            <h4>Sertifikasi Awal</h4>
            <div class="sertifikasi-before-content">
                <div class="sertifikasi-grid">
                    <div class="sertifikasi-before-content-one">
                        <h5>Certification Title: ISO 9001:2015</h5>
                        <p><strong>Certificate Number:</strong> 12345/ISO9001</p>
                        <p><strong>Issue Date:</strong> 2020-08-12</p>
                        <p><strong>Issuer:</strong> International Organization for Standardization (ISO)</p>
                        <?php if (!empty($sertifikatAwal)): ?>
                            <div class="sertifikat-awal">
                                <h5>Gambar Sertifikasi Awal</h5>
                                <img src="<?= base_url('images/' . $sertifikatAwal) ?>" alt="Sertifikat Awal" style="max-width: 100%; height: auto;">
                            </div>
                        <?php else: ?>
                            <p>No image available for Sertifikat Awal.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            
            <h4>Sertifikasi Akhir</h4>
            <div class="sertifikasi-before-content">
                <div class="sertifikasi-grid">
                    <div class="sertifikasi-before-content-one">
                        <h5>Certification Title: ISO 14001:2015</h5>
                        <p><strong>Certificate Number:</strong> 67890/ISO14001</p>
                        <p><strong>Issue Date:</strong> 2021-11-05</p>
                        <p><strong>Issuer:</strong> International Organization for Standardization (ISO)</p>
                        <?php if (!empty($sertifikatAkhir)): ?>
                            <div class="sertifikat-akhir">
                                <h5>Gambar Sertifikasi Akhir</h5>
                                <img src="<?= base_url('images/' . $sertifikatAkhir) ?>" alt="Sertifikat Akhir" style="max-width: 100%; height: auto;">
                            </div>
                        <?php else: ?>
                            <p>No image available for Sertifikat Akhir.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content pengalaman-pameran">
            <h4>Pengalaman Pameran</h4>
            <div class="pameran-content">
                <div class="pameran-grid">
                    <div class="pameran-content-one">
                        <h5>Exhibition: Tech Innovation Expo 2023</h5>
                        <p><strong>Date:</strong> 2023-06-15 to 2023-06-18</p>
                        <p><strong>Location:</strong> Jakarta Convention Center, Jakarta</p>
                        <p><strong>Description:</strong> Showcased the latest innovations in AI and cloud computing. PT Maju Terus demonstrated its cutting-edge SaaS platform.</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="tab-content pengalaman-ekspor">
            <h4>Pengalaman Ekspor</h4>
            <div class="ekspor-content">
                <div class="ekspor-grid">
                    <div class="ekspor-content-one">
                        <h5>Export Destination: United States</h5>
                        <p><strong>Year:</strong> 2023</p>
                        <p><strong>Product:</strong> Software as a Service (SaaS) for E-Commerce</p>
                        <p><strong>Description:</strong> Successfully exported our SaaS platform to various e-commerce companies in the US, providing a comprehensive solution for managing online stores.</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="tab-content media-promosi">
            <h4>Media Promosi</h4>
            <div class="promosi-content">
                <div class="promosi-grid">
                    <div class="promosi-content-one">
                        <h5>Media: Digital Catalog</h5>
                        <p><strong>Year:</strong> 2023</p>
                        <p><strong>Description:</strong> Developed an interactive digital catalog featuring all product offerings, including detailed specifications, pricing, and customer reviews. Distributed via email campaigns and social media channels.</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="tab-content pembinaan">
            <h4>Program Pembinaan</h4>
            <div class="pembinaan-content">
                <div class="pembinaan-grid">
                    <div class="pembinaan-content-one">
                        <h5>Program: Digital Innovation Coaching</h5>
                        <p><strong>Year:</strong> 2023</p>
                        <p><strong>Organizer:</strong> Ministry of Industry</p>
                        <p><strong>Description:</strong> Particir products, significantly improving efficiency and user experience.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
</div>


<script>
    // Select all tab buttons and content
    const tabButtons = document.querySelectorAll('.tab-button');
    const tabContents = document.querySelectorAll('.tab-content');

    // Add event listeners to all tab buttons
    tabButtons.forEach(button => {
        button.addEventListener('click', function(event) {
            event.preventDefault();

            // Get the data-tab value from the clicked button
            const targetTab = this.getAttribute('data-tab');

            // Remove 'active' class from all tab buttons
            tabButtons.forEach(btn => btn.classList.remove('active'));

            // Add 'active' class to the clicked tab button
            this.classList.add('active');

            // Hide all tab contents and reset their visibility
            tabContents.forEach(content => {
                content.classList.remove('active');
                content.style.display = 'none'; // Ensures tab content is hidden
            });

            // Show the selected tab content
            const activeContent = document.querySelector('.' + targetTab);
            if (activeContent) {
                activeContent.classList.add('active');
                activeContent.style.display = 'block'; // Makes the selected content visible
            }
        });
    });
</script>

<?= $this->endSection() ?>