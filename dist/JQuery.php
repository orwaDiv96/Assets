<script type="text/javascript">
  $(document).ready( function () {
  $('#searchForm').submit(function(){
    return false;
  });

    $('#searchBTN').click(function(){
      if($('#searchText').val() != ''){
    $.post(   
      $('#searchForm').attr('action'),
      $('#searchForm :input').serializeArray(),
      function(result){
        if (result) {
      $('#assetsDivInfo').show();
      var data = $('#searchText').val();
      var newData = data.replace(/ /g,"%20");
      var link = 'searchAssetsDiv.php?data=';
      var formRedirectLink = link+newData;
      $('#assetsDivInfo').load(formRedirectLink);
      $('#welcomeDIV').hide();
      }
      }
    );
}
  });
  });
</script>

    <script>  

$(document).ready(function(){

     $("#index").click(function(){

      $('#assetsDivInfo').show();
      $('#assetsDivInfo').load('assetsStatistics.php');
      $('#welcomeDIV').hide();      
    });  

     $("#Guides").click(function(){
      
      $('#welcomeDIV').show();
      $('#assetsDivInfo').hide();
      $('#welcomeDIV').load('welcomeDiv.php');     
    });  


    $("#controlPanel").click(function(){
      $('#assetsDivInfo').show();
      $('#assetsDivInfo').load('controlPanel.php');
      $('#welcomeDIV').hide();      
    });


    $("#addAsset").click(function(){
      $('#assetsDivInfo').show();
      $('#assetsDivInfo').load('addAssetForm.php');
      $('#welcomeDIV').hide();
      
    });

    $("#addBranch").click(function(){
      $('#assetsDivInfo').show();
      $('#assetsDivInfo').load('addBranchForm.php');
      $('#welcomeDIV').hide();
      
    });  

    $("#addDevice").click(function(){
      $('#assetsDivInfo').show();
      $('#assetsDivInfo').load('addDeviceForm.php');
      $('#welcomeDIV').hide();
    });

    $("#showAssets").click(function(){
      $('#assetsDivInfo').show();
      $('#assetsDivInfo').load('assetsStatistics.php');
      $('#welcomeDIV').hide();
    });


    $("#showAssetsCharts").click(function(){
      $('#assetsDivInfo').show();
      $('#assetsDivInfo').load('assetsStatisticsCharts.php');
      $('#welcomeDIV').hide();
    });

    $("#AllAssets").click(function(){$('#assetsDivInfo').show();
      
      $('#assetsDivInfo').load('assetsDiv.php?tn=All');
      $('#welcomeDIV').hide();
    });


    $("#GinningAll").click(function(){$('#assetsDivInfo').show();
      
      $('#assetsDivInfo').load('assetsDiv.php?tn=Ginning');
      $('#welcomeDIV').hide();
    });


    $("#Ginning_KHARTOUM").click(function(){$('#assetsDivInfo').show();
      
      $('#assetsDivInfo').load('assetsDiv.php?tn=Ginning&lcn=KRT');
      $('#welcomeDIV').hide();
    });

    $("#Ginning_ALSMEAH").click(function(){$('#assetsDivInfo').show();
      $('#assetsDivInfo').load('assetsDiv.php?tn=Ginning&lcn=ALSMEAH');
      $('#welcomeDIV').hide();
    });    

    $("#Ginning_ALGADAREF").click(function(){$('#assetsDivInfo').show();
      $('#assetsDivInfo').load('assetsDiv.php?tn=Ginning&lcn=GDRF');
      $('#welcomeDIV').hide();
    });    

    $("#Ginning_MADANI").click(function(){$('#assetsDivInfo').show();
      $('#assetsDivInfo').load('assetsDiv.php?tn=Ginning&lcn=MDNI');
      $('#welcomeDIV').hide();
    });    

    $("#DELTAAll").click(function(){$('#assetsDivInfo').show();
      $('#assetsDivInfo').load('assetsDiv.php?tn=Delta');
      $('#welcomeDIV').hide();
    });     

    $("#DELTA_Pack").click(function(){$('#assetsDivInfo').show();
      $('#assetsDivInfo').load('assetsDiv.php?tn=Delta&lcn=Delta%20Pack');
      $('#welcomeDIV').hide();
    });   

    $("#TNT_FACTORY").click(function(){$('#assetsDivInfo').show();
      $('#assetsDivInfo').load('assetsDiv.php?tn=Delta&lcn=TNT%20Factory');
      $('#welcomeDIV').hide();
    });    

    $("#COMMODOREAll").click(function(){$('#assetsDivInfo').show();
      $('#assetsDivInfo').load('assetsDiv.php?tn=Commodore');
      $('#welcomeDIV').hide();
    }); 

    $("#COMMODORE_KRT").click(function(){$('#assetsDivInfo').show();
      $('#assetsDivInfo').load('assetsDiv.php?tn=Commodore&lcn=KRT');
      $('#welcomeDIV').hide();
    });    

    $("#COMMODORE_PORTSUDAN").click(function(){$('#assetsDivInfo').show();
      $('#assetsDivInfo').load('assetsDiv.php?tn=Commodore&lcn=PRTSDN');
      $('#welcomeDIV').hide();
    });    

    $("#COMMODORE_ALGADAREF").click(function(){$('#assetsDivInfo').show();
      $('#assetsDivInfo').load('assetsDiv.php?tn=Commodore&lcn=GDRF');
      $('#welcomeDIV').hide();
    });

    $("#APCOAll").click(function(){$('#assetsDivInfo').show();
      $('#assetsDivInfo').load('assetsDiv.php?tn=APCO');
      $('#welcomeDIV').hide();
    });

    $("#APCO_KRT").click(function(){$('#assetsDivInfo').show();
      $('#assetsDivInfo').load('assetsDiv.php?tn=APCO&lcn=KRT');
      $('#welcomeDIV').hide();
    });

    $("#APCO_SAMSAM").click(function(){$('#assetsDivInfo').show();
      $('#assetsDivInfo').load('assetsDiv.php?tn=APCO&lcn=SAMSAM');
      $('#welcomeDIV').hide();
    });

    $("#APCO_MADANI").click(function(){$('#assetsDivInfo').show();
      $('#assetsDivInfo').load('assetsDiv.php?tn=APCO&lcn=MDNI');
      $('#welcomeDIV').hide();
    });

    $("#APCO_GDRF").click(function(){$('#assetsDivInfo').show();
      $('#assetsDivInfo').load('assetsDiv.php?tn=APCO&lcn=GDRF');
      $('#welcomeDIV').hide();
    });    


    $("#APCO_KSLA").click(function(){$('#assetsDivInfo').show();
      $('#assetsDivInfo').load('assetsDiv.php?tn=APCO&lcn=KSLA');
      $('#welcomeDIV').hide();
    });
    
    $("#APCO_HALFA").click(function(){$('#assetsDivInfo').show();
      $('#assetsDivInfo').load('assetsDiv.php?tn=APCO&lcn=NEW-HLFA');
      $('#welcomeDIV').hide();
    });    

    $("#APCO_SENNAR").click(function(){$('#assetsDivInfo').show();
      $('#assetsDivInfo').load('assetsDiv.php?tn=APCO&lcn=SNAR');
      $('#welcomeDIV').hide();
    }); 

    $("#APCO_DONGLA").click(function(){$('#assetsDivInfo').show();
      $('#assetsDivInfo').load('assetsDiv.php?tn=APCO&lcn=DNGLA');
      $('#welcomeDIV').hide();
    });
       
    $("#APCO_KORDFAN").click(function(){$('#assetsDivInfo').show();
      $('#assetsDivInfo').load('assetsDiv.php?tn=APCO&lcn=KRDFAN');
      $('#welcomeDIV').hide();
    });
     
    $("#APCO_ALGBLAIN").click(function(){$('#assetsDivInfo').show();
      $('#assetsDivInfo').load('assetsDiv.php?tn=APCO&lcn=GBLN');
      $('#welcomeDIV').hide();
    });     

    $("#APCO_ALRAHAD").click(function(){$('#assetsDivInfo').show();
      $('#assetsDivInfo').load('assetsDiv.php?tn=APCO&lcn=RHAD');
      $('#welcomeDIV').hide();
    });    

    $("#APCO_DAMAZIN").click(function(){$('#assetsDivInfo').show();
      $('#assetsDivInfo').load('assetsDiv.php?tn=APCO&lcn=DMAZEN');
      $('#welcomeDIV').hide();
    });
    
    $("#APCO_AGEDAY").click(function(){$('#assetsDivInfo').show();
      $('#assetsDivInfo').load('assetsDiv.php?tn=APCO&lcn=AGDY');
      $('#welcomeDIV').hide();
    });

    $("#MASOTAll").click(function(){$('#assetsDivInfo').show();
      $('#assetsDivInfo').load('assetsDiv.php?tn=MASOT');
      $('#welcomeDIV').hide();
    });

    $("#MASOT_KRT").click(function(){$('#assetsDivInfo').show();
      $('#assetsDivInfo').load('assetsDiv.php?tn=MASOT&lcn=KRT');
      $('#welcomeDIV').hide();
    });


    $("#MASOT_PortSudan").click(function(){$('#assetsDivInfo').show();
      $('#assetsDivInfo').load('assetsDiv.php?tn=MASOT&lcn=PRTSDN');
      $('#welcomeDIV').hide();
    });

    $("#MASOT_Algadaref").click(function(){$('#assetsDivInfo').show();
      $('#assetsDivInfo').load('assetsDiv.php?tn=MASOT&lcn=GDRF');
      $('#welcomeDIV').hide();
    });

    $("#ARECO").click(function(){$('#assetsDivInfo').show();
      $('#assetsDivInfo').load('assetsDiv.php?tn=Almergania&lcn=Albarlaman');
      $('#welcomeDIV').hide();
    });

    $("#HOLDINGAll").click(function(){$('#assetsDivInfo').show();
      $('#assetsDivInfo').load('assetsDiv.php?tn=Holding');
      $('#welcomeDIV').hide();
    });

    $("#HOLDING_ALBARLAMAN").click(function(){$('#assetsDivInfo').show();
      $('#assetsDivInfo').load('assetsDiv.php?tn=Holding&lcn=Albarlaman');
      $('#welcomeDIV').hide();
    });
    
    $("#HOLDING_MASOT").click(function(){$('#assetsDivInfo').show();
      $('#assetsDivInfo').load('assetsDiv.php?tn=Holding&lcn=KRT');
      $('#welcomeDIV').hide();
    });
    
    $("#HOLDING").click(function(){$('#assetsDivInfo').show();
      $('#assetsDivInfo').load('assetsDiv.php?tn=Holding&lcn=HOLDING');
      $('#welcomeDIV').hide();
    }); 

    $("#KASINGGER").click(function(){$('#assetsDivInfo').show();
      $('#assetsDivInfo').load('assetsDiv.php?tn=Kasingger&lcn=Albarlaman');
      $('#welcomeDIV').hide();
    }); 

    $("#MEDICAL_WAREHOUSE").click(function(){$('#assetsDivInfo').show();
      $('#assetsDivInfo').load('assetsDiv.php?tn=Medical&lcn=MEDICAL');
      $('#welcomeDIV').hide();
    });

    $("#PLASTIC_PortSudan").click(function(){$('#assetsDivInfo').show();
      $('#assetsDivInfo').load('assetsDiv.php?tn=Plastic%20Factory&lcn=PRTSDN');
      $('#welcomeDIV').hide();
    });

});
</script>