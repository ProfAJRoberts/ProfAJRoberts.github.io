#!/bin/csh
cd ~/Documents/WWW/Sites/LaTeX/Src
set fs=`ls *.tex`
foreach f ($fs)
echo $f
sed 's/fractal.}}/fractal}/g' $f >tmp.tex
mv tmp.tex $f
end
echo Finished
sleep 10
