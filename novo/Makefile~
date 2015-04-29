all: pdflatex bibtex
	pdflatex monografia
	pdflatex monografia

pdflatex: monografia.tex
	pdflatex monografia

bibtex: monografia.bib
	bibtex monografia

clear:
	rm -rf *.aux *.bbl *.blg *.dvi *.lof *.log *.lot *.backup *.toc monografia.pdf
