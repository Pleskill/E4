function  f(nombre){
	document.formulaire_entreprise.hidden=false;
	switch(nombre){
		case 1:
		document.formulaire_etudiant.hidden=false;
		document.formulaire_entreprise.hidden=true;
		break;
		case 2:
		document.formulaire_entreprise.hidden=false;
		document.formulaire_etudiant.hidden=true;
	}
}new1