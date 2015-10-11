#!/usr/bin/python

import feedparser

#TODO: function that validates/normalizes the 'location' field. Right now it's arbitrary. (values have been like: "Hawaii", "San Antonio", "Polk City, Fla", "SACRAMENTO, Calif./LOS ANGELES" and "" )

def getNews():
    """Gets news from reuters domestic feed. Stores title, summary, link & location for each story.

    Returns a list of dictionaries of current new entries."""

    reuters = feedparser.parse("http://feeds.reuters.com/Reuters/domesticNews")
    entries = []
    for entry in reuters['entries']:
        entry_dict = {
        'title': entry['title'],
        'summary': entry['summary'].split('<br',1)[0],
        'link': entry['link'],
        'location': entry['summary'].split('(Reuters)',1)[0],
        }
        entries.append(entry_dict)
    return entries

for entry in getNews():
    print entry
