function CtcRequistion(){

	this.CheckValue=e=>{
		var Id=$(e).attr("id");
		if($.trim($(e).val())==""){
			AddWarningClass(Id);
		}
		else{
			RemoveWarningClass(Id);
		}
	}
	this.NewRetailRequest=e=>{
		var sumtotAll=0,description=$("#detail_description").val(),pu=parseFloat($("#detail_pu").val()),qte=parseFloat($("#detail_qte").val()),ptot=0;
		ptot=Sum2Elements(pu,qte);

		if(description.length==0){
			AddWarningClass("detail_description");
			$("#detail_description").focus();
		}
		else if($("#detail_qte").val()==""){
			AddWarningClass("detail_qte");
			$("#detail_qte").focus();
		}
		else if($("#detail_pu").val()==""){
			AddWarningClass("detail_pu");
			$("#detail_pu").focus();
		}
		else{
			$("#RequestRetailsPrint").append("<tr><td>"+description+"</td><td>"+qte+"</td><td>"+pu+"</td><td class='RetailsubTot'>"+ptot+"</td></tr>");
			$("#detail_description").focus();
			
			deleteHtmlData("detail_description","id");
			deleteHtmlData("detail_pu","id");
			deleteHtmlData("detail_qte","id");

			sumtotAll=sumtot("RetailsubTot");
			$("#general_total_retails").html(Numberformat(sumtotAll));

			RemoveWarningClass("detail_description");
			RemoveWarningClass("detail_pu");
			RemoveWarningClass("detail_qte");
		}
		
	}
	this.PermissionDelete=e=>{
		var requisitionId=e.getAttribute('RequisitionId'),requestType=e.getAttribute("typeRequest"),requestNbr=0;
		msg = confirm("Voulez-vous vraiment annuler cette requisition?");
		if(msg == true)
		{
			$(e).parent('tr').remove();

			if(requestType=="All"){
				requestNbr=parseInt($("#AllRequestNumber").html());
				requestNbr -=1;
				$("#AllRequestNumber").html(requestNbr);
			}
			if(requestType=="Self"){

			}
			if(requestType=="ToApprouve"){

			}
			
		}else
		{
			return false;
		} 
	}

	this.RemoveHiddenClass=el=>{
		var forme=el.getAttribute('IdToRemove');
		var classObject=$("#"+forme).attr('class');
		
		classObject.split(' ').forEach(function(item){
			if(item=="visually-hidden"){
				$("#"+forme).removeClass("visually-hidden");
				$(el).html("Fermer");
				$("#description").focus();
			}
			else{
				$("#"+forme).addClass("visually-hidden");
				$(el).html("Nouvelle Requisition");
			}
		})
	}

	function deleteHtmlData(el,nature){
		if(nature=="class"){
			$("."+el).val(" ");
		}else{
			$("#"+el).val(" ");
		}
	}

	function Sum2Elements(pu,qte){
		var tot=pu*qte;
		return round(tot,2);
	}

	function round(num,rdn){
    	var el=num.toString();
    	    el=el.split('.');
    	var dec=el[1];

    	return (dec!=undefined)?el[0]+'.'+dec.slice(0,rdn):num;
	}
	
	function sumtot(columName){
		var tot=0;
		$("."+columName).each(function(){
			tot +=parseFloat($(this).html());	
		});

		return tot;
	}

	function Numberformat(num) {
		const n = String(num),
			  p = n.indexOf('.')
		return n.replace(
			/\d(?=(?:\d{3})+(?:\.|$))/g,
			(m, i) => p < 0 || i < p ? `${m}.` : m
		)
	}

	function AddWarningClass(el){
		$("#"+el).addClass("btn btn-warning");
	}

	function RemoveWarningClass(el){
		$("#"+el).removeClass("btn btn-warning");
	}
}
    
 
