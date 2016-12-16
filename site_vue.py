#!/usr/bin/python3

from jinja2 import Environment, FileSystemLoader
from site_modele import *

def creer_html(fichier_template, fichier_sortie, **infos):
	env=Environment(loader=FileSystemLoader('.'), trim_blocks=True)
	template=env.get_template(fichier_template)
	html=template.render(infos)
	f = open(fichier_sortie, 'w')
	f.write(html)
	f.close()

for i in range(len(liens)):
	titre = titre_pages[i]
	creer_html("site_template.html", liens[i], liens=liens, titre=titre, titre_pages=titre_pages)
