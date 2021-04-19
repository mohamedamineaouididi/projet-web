<?PHP
	class produit{
		private ?int $idProduit = null;
		private ?string $nomPrdt = null;
		private ?string $type = null;
		private ?float $prix = null;
		private ?string $dateExpr = null;
		private ?int $quantite = null;
		
		function __construct(int $idProduit, string $nomPrdt, string $type, float $prix, string $dateExpr, int $quantite){
			
			$this->idProduit=$idProduit;
			$this->nomPrdt=$nomPrdt;
			$this->type=$type;
			$this->prix=$prix;
			$this->dateExpr=$dateExpr;
            $this->quantite=$quantite;
		}
		
		function getId(): int{
			return $this->idProduit;
		}
		function getNom(): string{
			return $this->nomPrdt;
		}
		function gettype(): string{
			return $this->type;
		}
		function getprix(): float{
			return $this->prix;
		}
		function getdate(): string{
			return $this->dateExpr;
		}
		function getquantite(): int{
			return $this->quantite;
		}

		function setId(int $idProduit): {
			$this->idProduit=$idProduit;
		}
		function setNom(string $nomPrdt): {
			$this->nomPrdt;
		}
		function settype(string $type): {
			$this->type=$type;
		}
		function setprix(float  $prix): {
			$this->prix=$prix;
		}
		function setdate(string $dateExpr): {
			$this->dateExpr=$dateExpr;
		}
        function setquantie(int $quantite): {
			$this->quantite=$quantite;
		}
	}
?>