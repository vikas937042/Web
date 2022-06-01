<html>
    <body>

    </body>
    <?php
        public interface properties{
            
            function setProperty($i,$b);
            function getProperty();
        }
        public interface HOME{
            function setHasApartment($has);
            function getHasSociety();
        }
        public class Bunglow implements properties,Home{
            public $i;
            public $b;
            public $garden;
            public $apartment;
            public $society;
            function setGarden($garden){
                $this->garden=$garden;
            }
            function getGarden(){
                return $this->garden;
            }
            function setHasApartment($has){
                $this->apartment=$has;
            }
            function getHasApartment(){
                return $this->apartment;
            }
            function setSociety($has){
                $this->society=$has;
            }
            function getHasSociety(){
                return $this->society;
            }
            function setProperty($i,$b){

            }
            function getProperty(){

            }

        }

        $bunglow=new Bunglow();
        $bunglow->setGarden(true);
        $bunglow->setHasApartment(true);
        $bunglow->setSociety(false);

        echo "Information of Bunglow <br>";
        $res=$bunglow->getGarden();
        if( $res==1)
            echo "Garden : True";
        else
            echo "Garden : False";
        echo "<br>";
        $res=$bunglow->getHasApartment();
        if( $res==1)
            echo "Apartment : True";
        else
            echo "Apartment : False";
        echo "<br>";
        $res=$bunglow->getHasSociety();
        if( $res==1)
            echo "Society : True";
        else
            echo "Society : False";
        
        
        

    ?>
</html>