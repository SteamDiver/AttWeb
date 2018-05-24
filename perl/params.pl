#!/usr/bin/perl

print "Content-type: text/html\n\n";
print "<HTML><BODY>\n";
$method = $ENV{'REQUEST_METHOD'};
if ($method eq 'POST') {
    $length = $ENV{'CONTENT_LENGTH'};
    read(STDIN, $qstr, $length);
}
else {if ($method eq 'GET') {$qstr = $ENV{'QUERY_STRING'};}
else {print "Method " . $method . " is not supported </BODY></HTML>"; #exit(0);
}}
print "<P>Method = ", $method;
print "<p>Params string: <p>\n";
print $qstr; # обратная перекодировка
$qstr =~ tr/+/ /; $qstr =~ s/%([a-fA-F0-9][a-fA-F0-9])/pack("C", hex($1))/eg; # выделение списка параметров
print "<p>Fields:<p>"; @pars = split(/&/, $qstr); # определение размера массива
$n_pars = @pars; # выделение имени и значения для каждого параметра
 for ($i=0; $i<$n_pars; $i++) { # выделение списка из двух переменных $name и $value
($name, $value) = split(/=/, $pars[$i]); print "Field <B>", $name, "</B> = <I>", $value, "</I><br>";
 }
print "</HTML></BODY>\n";