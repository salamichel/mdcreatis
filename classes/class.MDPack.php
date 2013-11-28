<?php
class MDPack {

    public $name;
    public $id;
    public $pack_prix;
    public $options = array();
    public $produits = array();
    private $db;

    function __construct($db) {
        $this->db = &$db;
        $this->id = "";
        $this->option = array();
        $this->produits = array();
        
    }

    public function setPackId($pId) {
        $this->id = $pId;
    }

    public function setPackOptions() {
        if (empty($this->id))
            return;

        $params = array($this->id);

        $resutls = $this->db->rawQuery("SELECT * FROM md_pack_options a, md_options o WHERE a.option_id = o.option_id and pack_id = ? ", $params);

        foreach ($resutls as $item) {
            array_push($this->options, $item);
        }
    }

    public function setPackProduits() {
        if (empty($this->id))
            return;

        $params = array($this->id);

        $resutls = $this->db->rawQuery("SELECT * FROM md_pack_produits a, md_produits o WHERE a.produit_id = o.produit_id and pack_id = ? ", $params);

        foreach ($resutls as $item) {
            array_push($this->produits, $item);
        }
    }

    public function setPackName() {
        if (empty($this->id))
            return;

        $r = $this->db->where("pack_id", $this->id)
                ->get("md_packs");

        $this->name = $r[0]["nom"];
    }

    public function getPackName() {
        return($this->name);
    }

    public function getPackOption() {
        return($this->options);
    }

}
?>