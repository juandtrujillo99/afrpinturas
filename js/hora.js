//hora y fecha
var rangodia=new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado")
var rangomes=new Array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre")
var fecha=new Date()
var year=fecha.getYear()
if (year < 1000)
  year+=1900
var dia=fecha.getDay()
var mes=fecha.getMonth()
var diames=fecha.getDate()
var hora=fecha.getHours()
var minuto = fecha.getMinutes()
var segundo = fecha.getSeconds()