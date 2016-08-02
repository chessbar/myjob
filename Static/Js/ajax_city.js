/* 
* @Author: Administrator
* @Date:   2014-06-26 17:32:23
* @Last Modified by:   Administrator
* @Last Modified time: 2014-07-26 10:27:35
*/
$(function(){
	$("select[name=city_one]").change(function(){
		var cityId=$(this).val();
		$.ajax({
			url: CONTROL+'&m=ajax_city',
			data:{cityid:cityId},
			type: 'post',
			dataType: 'json',
			success:function(data){
				if(cityId==0){
					var html="<option value=0>请选择</option>";
				}else{
					var html="<option value=0>不限</option>";
					$.each(data, function(k, v) {
						 html+='<option value='+v.cityid+'>'+v.cityname+'</option>';
					});

				}
				$('select[name=city_second]').find('option').remove();
				$('select[name=city_second]').html(html);
			} 
		})
		
	})
})
 