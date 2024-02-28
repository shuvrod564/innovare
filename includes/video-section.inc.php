    <!-- Client View Services Start -->
    <div class="">
        <div class="container-fluid px-0">
            <div class="position-relative">
                <img src="assets/images/home/3d-rendering.webp" class="img-fluid" width="6441662" heig554ht="587" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center" style="background-color: #00000052;">
                    <button 
                        class="btn p-0 border border-white play__btn rounded-circle d-flex justify-content-center align-items-center"
                        data-bs-toggle="modal" data-bs-target="#modalVideo"
                        type="button"
                    >
                        <svg class="transition" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z"/></svg>
                    </button>
                </div>
            </div>
        </div><!--//.container-fluid--> 
    </div>
   
    <!-- Modal Body -->
    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
    <div
        class="modal fade"
        id="modalVideo"
        tabindex="-1"  
        role="dialog"
        aria-labelledby="modalTitleId"
        aria-hidden="true"
    >
        <div
            class="modal-dialog modal-dialog-centered"
            role="document"
            style="max-width: 1000px;"
        >
            <div class="modal-content position-relative">
                <button
                    type="button"
                    class="btn-close position-absolute rounded-circle bg-white p-3 opacity-100"
                    data-bs-dismiss="modal" style="z-index: 99;top: -1rem;right: -1rem;"
                    aria-label="Close"
                ></button>
                <iframe class="ratio ratio-16x9" id="videoIframe" width="994" height="559" title="Simple &amp; Elegent 3bhk Home Tour @ Dighi | Best Interior Designer in Pune | Kams Designer Zone" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </div>
     
    <script>
        const videoModalScript = document.getElementById('modalVideo')
        if (videoModalScript) {
            videoModalScript.addEventListener('show.bs.modal', event => {
                let iframe = document.getElementById("videoIframe");
                iframe.setAttribute('src', 'https://www.youtube.com/embed/OzUkvzyBttA?autoplay=1');
            }) 
        }
        if (videoModalScript) {
            videoModalScript.addEventListener('hidden.bs.modal', event => {
                let iframe = document.getElementById("videoIframe");
                iframe.setAttribute('src', '');
            })
        }
    </script> 
    <!-- Client View Services End -->  