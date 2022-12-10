<?php
 require('Piece.class.php'); 
  class GameManager
  {
     private $board;

     public function __construct()
     {
         $this->board = array(); 
         
         $this->board['A8'] = new Piece('black', 'rook');
         $this->board['B8'] = new Piece('black', 'knight');
         $this->board['C8'] = new Piece('black', 'bishop');
         $this->board['D8'] = new Piece('black', 'queen');
         $this->board['E8'] = new Piece('black', 'king');
         $this->board['F8'] = new Piece('black', 'bishop');
         $this->board['G8'] = new Piece('black', 'knight');
         $this->board['H8'] = new Piece('black', 'rook');
         $this->board['A7'] = new Piece('black', 'pawn');
         $this->board['B7'] = new Piece('black', 'pawn');
         $this->board['C7'] = new Piece('black', 'pawn');
         $this->board['D7'] = new Piece('black', 'pawn');
         $this->board['E7'] = new Piece('black', 'pawn');
         $this->board['F7'] = new Piece('black', 'pawn');
         $this->board['G7'] = new Piece('black', 'pawn');
         $this->board['H7'] = new Piece('black', 'pawn');


         $this->board['A1'] = new Piece('white', 'rook');
         $this->board['B1'] = new Piece('white', 'knight');
         $this->board['C1'] = new Piece('white', 'bishop');
         $this->board['D1'] = new Piece('white', 'queen');
         $this->board['E1'] = new Piece('white', 'king');
         $this->board['F1'] = new Piece('white', 'bishop');
         $this->board['G1'] = new Piece('white', 'knight');
         $this->board['H1'] = new Piece('white', 'rook');
         $this->board['A2'] = new Piece('white', 'pawn');
         $this->board['B2'] = new Piece('white', 'pawn');
         $this->board['C2'] = new Piece('white', 'pawn');
         $this->board['D2'] = new Piece('white', 'pawn');
         $this->board['E2'] = new Piece('white', 'pawn');
         $this->board['F2'] = new Piece('white', 'pawn');
         $this->board['G2'] = new Piece('white', 'pawn');
         $this->board['H2'] = new Piece('white', 'pawn');
      
      



     }
     
     public function getBoardHTML(): string 
     {
        $html = "<div id=\"grid-container\">";
        for  ( $i=8; $i >= 1 ; $i--)

        {
          for ($j=65; $j <= 72 ; $j++) {
              $position = chr($j).$i;
              if( ($i + $j) % 2 )
                 $class = "black";
              else
                 $class = "white";    
              $html .= "<div id=\"$position\" class=\"$class\">";
              if(isset($this->board[$position]))
                $html .= $this->board[$position]->getHTML();
                
              $html .= "</div>"; 
  
          }
  
      }
  
      $html .= "</div>";
      return $html;







     }
     public function movePiece(string $s, string $d) {  //source, destination
         if(isset($this->board[$s])) {
            $this->board[$d] = clone $this->board[$s]; //skopiuj
            unset($this->board[$s]);
         }
     } 



  }





?>