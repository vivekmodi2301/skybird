<?php function PaginationWork($pno='')
{
   global $frmdata ;
   global $frmdataget;
   if($pno!='')
    $recordPerPage=$pno;
   else   
       $recordPerPage=10;
   if($frmdataget['pageNumber']==1)
   {
         $frmdata['from']=0;
         $frmdata['to']=$recordPerPage;
   }
   else
   {
       if($frmdataget['pageNumber']<=0)
       {
                $frmdataget['pageNumber']=1;
                $frmdata['from']=0;
                $frmdata['to']=$recordPerPage;
       }
       else
       {
                $frmdata['from']= $recordPerPage * ( ( (int) $frmdataget['pageNumber']) - 1);
                $frmdata['to']=$recordPerPage;
       }   
   }
}
function PaginationDisplay(&$totalCount,$starturl,$endurl,$pno='')
{
        global $frmdata;
        global $frmdataget;
           if($pno!='')
          $recordPerPage=$pno;
        else   
          $recordPerPage=10;
        if($totalCount > $recordPerPage)
        {
            echo '<span id="pg">';
            $pre=$frmdataget['pageNumber']-1;
            if($frmdata['from'] >0)
            {
                echo '<a href="'.$starturl.$pre.$endurl.'" >&lt;Prev</a>';
            }
            $i=1;
            $j=$frmdataget['pageNumber'];
            if($j>=10)
            $i=$j-4;
            if($totalCount > 2* $recordPerPage)
            {
                for(;$i<=5+$frmdataget['pageNumber'] &&($totalCount >($i-1)*$recordPerPage) ;$i++)
                {
                    if($i==$frmdataget['pageNumber'])
                    {
                        echo '<a id="pg-selected">';
                        echo ($i);
                        echo '</a>';
                    }
                    else
                    {
                        echo '<a href="'.$starturl.$i.$endurl.'">';
                        echo ($i);
                        echo '</a>';
                    }
                }
            }
            $frmdataget['pageNumber']=$j;
            $next=$frmdataget['pageNumber']+1;
            if($totalCount > ($frmdata['from'] + $frmdata['to']))
            {
                echo '<a href="'.$starturl.$next.$endurl.'" >&gt;Next</a>';
            }
            echo '</span>';
      }
}?>