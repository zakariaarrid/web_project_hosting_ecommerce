$.noConflict();

jQuery(document).ready(function($) {

	"use strict";

	[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {
		new SelectFx(el);
	} );

	jQuery('.selectpicker').selectpicker;


	$('#menuToggle').on('click', function(event) {
		$('body').toggleClass('open');
	});

	$('.search-trigger').on('click', function(event) {
		event.preventDefault();
		event.stopPropagation();
		$('.search-trigger').parent('.header-left').addClass('open');
	});

	$('.search-close').on('click', function(event) {
		event.preventDefault();
		event.stopPropagation();
		$('.search-trigger').parent('.header-left').removeClass('open');
	});

	// $('.user-area> a').on('click', function(event) {
	// 	event.preventDefault();
	// 	event.stopPropagation();
	// 	$('.user-menu').parent().removeClass('open');
	// 	$('.user-menu').parent().toggleClass('open');
	// });


});
new Vue({
    el:'#app',
    data : {
        IsDisabled : false,
        website : '',
        username : '',
        password : '',
        nom_complet : '',
        items : []
    },
    computed : {
        domaine_ecommerce() {
            if(this.website==""){
                return 'www.votrenomdedomaine.domaine_e.com'
            }else
                return 'www.'+this.website+'.domaine_e.com'
        }
    },
    methods : {
        send_data() {

            let count = 0
            document.getElementById("error").innerHTML = '';
            if(this.website != '' && this.username != '' && this.password != '' && this.nom_complet != '') {
                let element = document.getElementById("btn_id");
                let label = document.getElementById("id_h_title");
                let bar = document.getElementById("id_bar");
                let width = document.getElementById("id_width");
                let percent = document.getElementById("id_percent");
                label.style.display="block";
                bar.style.display="block";
                element.classList.remove("fa-dot-circle-o");

                element.classList.add("fa-spinner");
                element.classList.add("fa-spin");

                this.IsDisabled = true

                /*for(let i = 6; i<95;i++){
                    setTimeout(function(){
                        document.getElementById("id_percent").innerHTML = i+'%';
                        document.getElementById("id_width").style.width = i+'%';
                    }, 1000);
                }*/
                /* let px = 85;
                 var interval = setInterval(function() {
                     if (px <= 85) {
                         console.log(px);
                         document.getElementById("id_percent").innerHTML = px+'%';
                         document.getElementById("id_width").style.width = px+'%';
                         px++;
                     }
                     else {
                         clearInterval(interval);
                     }
                 }, 1000);*/
                var px = 5;

                var interval = setInterval(function() {
                    if (px <= 85) {
                        document.getElementById("id_percent").innerHTML = px+'%';
                        document.getElementById("id_width").style.width = px+'%';
                        console.log(px);
                        px++;
                    }
                    else {
                        clearInterval(interval);
                    }
                }, 30);
                axios.post('insert_domaine', {
                    domaine: this.domaine_ecommerce,
                    password: this.password,
                    nom_complet: this.nom_complet,
                    username: this.username
                })
                    .then(res => {
                        console.log(res.data)
                        element.classList.remove("fa-spinner");
                        element.classList.remove("fa-spin");
                        element.classList.add("fa-dot-circle-o");

                        if(res.data == 0) {
                            /*****/
                            let data = {
                                link:this.domaine_ecommerce,
                                id:this.domaine_ecommerce
                            };
                            this.items.push(data)
                            document.getElementById("id_percent").innerHTML = '100%';
                            document.getElementById("id_width").style.width = '100%';

                            toastr.success("Votre subdomaine a été créé avec succès");

                            this.domaine_ecommerce = '',
                                this.password = '',
                                this.nom_complet = '',
                                this.username = ''
                            label.style.display="none";
                            bar.style.display="none";
                            document.getElementById("id_percent").innerHTML = '5%';
                            document.getElementById("id_width").style.width = '5%';
                            /*setTimeout(() =>{
                                 document.getElementById("ok").style.display = "none";
                             }, 10000);*/

                            /*****/


                            this.IsDisabled = false
                        }else {
                            toastr.error("Ce sub-domaine existe déjà");
                            document.getElementById("error").innerHTML = 'Ce sub-domaine existe déjà ';
                            this.IsDisabled = false
                        }

                    })
                    .catch((e) => {
                        console.log(e)
                    })
            }


        }
    }
})


