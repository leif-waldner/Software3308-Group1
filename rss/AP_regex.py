#!/Library/Frameworks/Python.Framework/Versions/3.4/bin/python3.4


#this is a routine to use feedparser to first parse the Associate Press RSS feed.
#this gets returned and then is very easy to use a regular expression on.
#For now the only things that are removed are the locations and the associated
#news story. They are printed down below.

import feedparser
import re
d = feedparser.parse('http://hosted.ap.org/lineups/TOPHEADS.rss?SITE=AP&SECTION=HOME')
#this d is now a python unicode string


location_lst = []
news_lst = []
j = 0

for i in d['entries']:
	descr = i['summary_detail']['value']
	matcher = re.match('^[a-zA-Z]+\s{0,1}[,]{0,1}\s{0,1}[a-zA-Z]*',descr)
	searcher = re.search('\(AP\)\s+[-]+\s+(.*)',descr)
	if searcher is None or matcher is None:
		print('News item not stripped for item: ')
		print(descr)
	else:
		location_lst.append(matcher.group(0))
		news_lst.append(searcher.group(1))

		



#print(location_lst)
#print(news_lst)
