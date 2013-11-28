<?php

class mdcreatis {

    public $page_id;
    public $path;
    public $filename;
    public $pagesInfo;
    public $pagesOption;
    public $TechniqueCode;
    public $TechniqueCategory;
    private $db;

    function __construct($db) {
        $this->db = &$db;
        $this->path = "";
    }

    function setPagePath($path) {
        $this->path = $path;
    }

    function setTechnique($code) {
        $this->TechniqueCode = $code;
    }

    function getTechniqueInfos() {
        $t = $this->db->where('code', $this->TechniqueCode)
                ->get("md_techniques");

        $page =array();
        
        list($whole, $decimal) = explode('.', $t[0]["prix_ht"]);
        $page = $t[0];
        $page["prix"] = $whole;
        $page["decimal"] = $decimal;
        $page["options"] = $this->getTechniqueOptions($t[0]["nom"]);
        
        return($page);
    }

    function getPageInfo() {
        $r = $this->db->where('chemin', $this->path)
                ->get("md_produits");

        $this->pagesInfo = $r;
        return($r);
    }

    function getSubPage($subpage) {
        if (empty($this->pagesInfo))
            $this->getPageInfo();


        foreach ($this->pagesInfo as $page) {
            if ($page["code"] === $subpage) {
                list($whole, $decimal) = explode('.', $page["prix_ht"]);
                $page["prix"] = $whole;
                $page["decimal"] = $decimal;
                $page["options"] = $this->getOptions($page["produit_id"]);
                return($page);
            }
        }
    }

    function getOptions($id) {
        $o = $this->db->rawQuery("SELECT * 
            FROM md_produit_options a, md_options o
            WHERE a.option_id = o.option_id 
            and produit_id = ? 
            order by prix_ht desc", array($id));

        return($o);
    }
    function getTechniqueOptions($id) {
        $o = $this->db->rawQuery("SELECT * 
            FROM md_techniques
            where nom = ? 
            and code != ?
            order by prix_ht desc", array($id, $this->TechniqueCode));

        return($o);
    }

}
?>