(function(){
	tinymce.PluginManager.add("ps2id_tinymce_custom_button",function(editor,url){
		editor.addButton("ps2id_tinymce_custom_button_link",{
			icon:"icon ps2id-custom-icon-link", 
			title:"Insert Page scroll to id link",
			onclick:function(){
				editor.windowManager.open({
					title:"Insert Page scroll to id link",body:[
						{type:"textbox",name:"ps2idurlid",label:"URL/id (e.g. #my-id)"},
						{type:"textbox",name:"ps2idtext",label:"Link Text"},
						{type:"textbox",name:"ps2idoffset",label:"Offset (optional)"}
					],
					onsubmit:function(e){
						editor.insertContent("[ps2id url='"+e.data.ps2idurlid+"' offset='"+e.data.ps2idoffset+"']"+e.data.ps2idtext+"[/ps2id]");
					}
				});
			} 
		});
		editor.addButton("ps2id_tinymce_custom_button_target",{
			icon:"icon ps2id-custom-icon-target", 
			title:"Insert Page scroll to id target",
			onclick:function(){
				editor.windowManager.open({
					title:"Insert Page scroll to id target",body:[
						{type:"textbox",name:"ps2idid",label:"id (e.g. my-id)"},
						{type:"textbox",name:"ps2idtarget",label:"Highlight target selector (optional)"}
					],
					onsubmit:function(e){
						editor.insertContent("[ps2id id='"+e.data.ps2idid+"' target='"+e.data.ps2idtarget+"'/]");
					}
				});
			} 
		});
	}); 
})();