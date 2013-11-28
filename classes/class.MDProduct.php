<?php

class MDProduct {

    public $id;
    public $name;
    public $prix;
    public $decimal;
    public $productInfo;
    public $techniques;
    private $db;

    function __construct($db) {
        $this->db = &$db;
        $this->techniques = array();
    }

    public function setProductId($pId) {
        $this->id = $pId;
    }

    function setProductName() {
        if (empty($this->id))
            return;

        $r = $this->db->where("produit_id", $this->id)
                ->get("md_produits");

        $this->name = $r[0]["nom"];
    }

    public function setProductTechniques() {
        if (empty($this->id))
            return;

        $params = array($this->id);

        $resutls = $this->db->rawQuery("SELECT * FROM md_produit_tkt a, md_techniques o WHERE a.technique_id = o.technique_id and produit_id = ? ", $params);

        foreach ($resutls as $item) {
            array_push($this->techniques, $item);
        }
    }

    function getProductInfo() {
        $r = $this->db->where('produit_id', $this->id)
                ->get("md_produits");

        list($whole, $decimal) = explode('.', $r[0]["prix_ht"]);
        $this->prix = $whole;
        $this->decimal = $decimal;

        $r[0]["prix"] = $whole;
        $r[0]["decimal"] = $decimal;

        $this->productInfo = $r;
        return($r);
    }

    function getProductName() {
        return($this->name);
    }

}

?>