
    <a href="http://localhost/meittopi/acceuil.php" id="lienAccueil">
		<!-- mettre celui pour modifier le site -->
		<img src="http://localhost/Meittopi/image/logoSweetTable.png" alt="SweetTable" id="logo"/>
	</a>

	<section id="bloc">
		<nav>
            <ul>
                <a href="http://localhost/meittopi/rechercher.php"> <li id="rechercherNav">   </li> </a>
                <a href="http://localhost/meittopi/profil/monProfil.php"> <li id="profilNavigateurPrincipal">  </li> </a>
                <a href="http://localhost/meittopi/amis/rechercher-amis.php"> <li id="amisNavigateurPrincipal"> </li> </a>
                <a href="http://localhost/meittopi/laisser-un-avis.php"> <li id="avisNavigateurPrincipal">  </li> </a>
                <a href="http://localhost/meittopi/discution.php"> <li id="discutionNavigateurPrincipal"> </li> </a>
                <a href="http://localhost/meittopi/votre-avis.php"> <li id="votreAvisNavigateurPrincipal">  </li> </a>
            </ul>
        </nav>
		
		<ul>
			<li id="rechercherLi">
                <label for="rechercher"> Rechercher : </label>
				 <input type="search" name="rechercher" id="rechercher" placeholder="" autocomplete="off"/>
                <ul id="ajaxRecheche" style="display: none;"> </ul>
            </li>



			<li id="ouLi">
                <label for="ou"> Près de :  </label>
				 <input type="search" name="ou" id="ou" placeholder="" autocomplete="off"/>
                <div id="ajaxOu" style="display: none;"> </div>
            </li>




            <!-- TODO: faire une recher avec des mais -->
			<!-- <li class="recherche" id="amis">
				 <input type="search" name="acqui" id="acqui" placeholder="" class="barreDeRecherche" autocomplete="off"/>  </li> -->
			<li id="loupeLi">   <input type="submit" value="Rech"/> </li>
			
		</ul>
	</section>
	
	<script src="http://localhost/meittopi/vue/navigateur/francais/navigateur.js">  </script>

    <script src="http://localhost/meittopi/controleur/addEvent.js"></script>
    <script src="http://localhost/meittopi/controleur/fonctionJS/autoComplexion.js">  </script>
    <script>
        autoComplexion('ou', 'ajaxOu', 'http://localhost/meittopi/controleur/navigateur/lieu.php');
    </script>

