  <h1>Congratulations</h1>
  This is your new Page
  <!--  ----------------------------------------------------------------------  -->
<!--  NOTA: Adicione o seguinte elemento <META> à sua página <HEAD>.  Se      -->
<!--  necessário, modifique o parâmetro charset para especificar o conjunto   -->
<!--  de caracteres de sua página HTML.                                       -->
<!--  ----------------------------------------------------------------------  -->

<META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8"></META>

<!--  ----------------------------------------------------------------------  -->
<!--  NOTA: Adicione o elemento <FORM> a seguir à sua página.                 -->
<!--  ----------------------------------------------------------------------  -->

<form action="https://test.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">

<input type="hidden" name="oid" value="00D8D0000005pIZ"></input>
<input type="hidden" name="retURL" value="https://brf--brfsbuat.sandbox.my.site.com/formulario"></input>

<!--  ----------------------------------------------------------------------  -->
<!--  NOTA: Estes campos são elementos de depuração opcionais. Remova o       -->
<!--  comentário dessas linhas se quiser testar no modo de depuração.         -->
<!--  <input type="hidden" name="debug" value=1>                              -->
<!--  <input type="hidden" name="debugEmail"                                  -->
<!--  value="guilherme.ramalho@brf.com">                                      -->
<!--  ----------------------------------------------------------------------  -->

<label for="first_name">Primeiro Nome</label><input  id="first_name" maxlength="40" name="first_name" size="20" type="text"></input><br></br>

<label for="last_name">Sobrenome</label><input  id="last_name" maxlength="80" name="last_name" size="20" type="text"></input><br></br>

<label for="email">Email</label><input  id="email" maxlength="80" name="email" size="20" type="text"></input><br></br>

<label for="mobile">Celular</label><input  id="mobile" maxlength="40" name="mobile" size="20" type="text"></input><br></br>

CEP:<input  id="00N4A00000G97s0" maxlength="9" name="00N4A00000G97s0" size="20" type="text"></input><br></br>

Complemento:<input  id="00N4w00000FlZcm" maxlength="255" name="00N4w00000FlZcm" size="20" type="text"></input><br></br>

<input type="submit" name="submit"></input>

</form>