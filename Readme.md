# Readme

## About

### Pre-Intro

The script has been used internally for me to generate IPA and such for the Myanmar Open Wordnet, but eventually I thought I would just put it out here. I'm very new to all these, so the code isn't exactly in any good shape, and I'm also fiddling with GitHub and getting the hand of it. Any comments and help on these would definitely be appreciated. :)

### Introduction

Mya2Rom is a simple script — Javascript-based at the moment — that converts Burmese script into various romanisation systems.

At present, it converts it into:
- International Phonetic Alphabet (IPA)
	- namely, the flavour used in Wikipedia. One noticeable feature is the use of 'N' instead of nasalised vowels.
- Myanmar Language Commission Transcription System (MLCTS)
	- an orthographical transcription system, created by the MLC
- MLCTS, modified
	- a more phonetical version of MLCTS
	- this version is used by the MLC itself for their Myanmar-English dictionary, as well as by sites such as SEALang
- Simplified systems (just called _Simple1_ and _Simple2_)
	- they are simplified and eschew tonal marks and does not differentiate
	- these are based on phonetic and orthgraphical transcriptions, respectively
	- **Note:** The simplified systems are still works-in-progress
	
### Attribution & Acknowledgements
	
This script began as only Mya2IPA, with Burmese-letter<>IPA correspondences based mainly on the _to-ipa.py_ Python script by [Thura Hlaing](https://gist.github.com/trhura), which is released on public domain.

The method used to perform syllable splitting is based on Wiktionary template's [auto-IPA script](https://en.wiktionary.org/wiki/Module:my-pron).

Extended romanisation tables based on [Wikipedia's 'Burmese Alphabet' article](https://en.wikipedia.org/wiki/Burmese_alphabet) and [Wiktionary's 'Burmese transliteration' page](https://en.wiktionary.org/wiki/Wiktionary:Burmese_transliteration)

IPA sound/pronunciation change rules based on abovementioned Wikipedia <Burmese Alphabet> article.

The Wikipedia and Wiktionary resources are under the [Creative Commons Attribution-ShareAlike License](https://en.wikipedia.org/wiki/Wikipedia:Text_of_Creative_Commons_Attribution-ShareAlike_3.0_Unported_License)

## Using MYA2ROM

### Just the romanisations

If you only wish to obtain the romanisations of the Burmese words, you can just use the HTML file _mya_rom.html_.
The file lets you input a Burmese word and obtain the transcriptions directly.


### As part of another page/script

You only need _mya2rom.js_ and _romanisations.js_ as the script source files.

Then, anywhere in the script, call the functions ``mya2rom`` or ``mya2rom_all``.

The main difference is that ``mya2rom`` allows you to specify the transcription system you want to use, while ``mya2rom_all`` will return an _array_ containing romanisations for all the transcription systems.

#### Using the functions
``mya2rom(<word:string>, <system:string>, [<show_nice_alts:boolean>, <is_manual:boolean>])``, returns a STRING.

``mya2rom_all(<word:string>, [<show_nice_alts:boolean>, <is_manual:boolean>])``, returns an ARRAY.

For ``mya2rom``, the available transcription systems are: ``ipa``, ``mlcts``, ``mlcts2``, ``simple``, ``simple2``

**Note:** The system must be explicitly stated. I've not provided a default option yet (0.4.2, maybe?).

Both functions have two optional arguments:
- ``<show_nice_alts:boolean>``  whether to show alternate segments as complete syllables, or just show alternatives within the word itself (using pipes and commas); default FALSE
- ``<is_manual:boolean>`` : whether syllable splitting was performed manually, or should be performed automatically; default FALSE (automatic syllabification)

#### Examples
```javascript
// To obtain IPA transcription for မြို့ "town/city"
mya2rom("မြို့", "ipa"); // returns "mjo̰"

// To obtain MLCTS2 transcription
mya2rom("မြို့", "mlcts2"); // returns "mjou."

// To obtain transcriptions for all available systems
mya2rom_all("မြို့"); // returns array ["mjo̰", "mrui.", "mjou.", "my|o,ou|", "myui"]

// To obtain transcriptions for all available systems, with nice alternatives
mya2rom_all("မြို့", true); // returns array ["mjo̰", "mrui.", "mjou.", "myo|myou", "myui"]
```

## More Info & Progress

The sections below were originally in the header comments of the main script itself, but are now placed and updated here. (see _Old Readme.md_ for the last in-script comments, from 0.4.1)

### Updates

- 29 Nov 2017
	- ``mya2rom_all`` now honours the ``is_manual`` argument, when previously it was hard-coded and defaulted to _false_ regardless.

- 23 Nov 2017
	- Not an update; 0.4.1 is the first GitHub version.

- 12 Jul 2017 (0.4.1):
	- Fixed the oversight of not taking into account the vertical bar enclosed alternatives when performing substitutions  
  
[Older, pre-0.4.1 updates are in _Old Readme.txt_]

### Limitations
- Not a limitation per-se, but standalone consonants are automatically given an inherent letter (နွှ => n̥wa̰)
- It does not convert "stacked" letters
- Asat'ed letters (used in transliterations (Like "t" in Watson)) do not currently convert successfully all the time.
	- Might be treated as part of a syllable final 
- It is a what-you-type-is-what-you-get automated romaniser, which means it does not:
    - take into account schwas
			- Nevertheless, schwas are provided together with the full vowel, as an alternative.
    - take into account voicing sandhi (where unvoiced letters become voiced ones)
	  	- (for example, ရင်းပင် will be jɪ́ɴ pɪ̀ɴ instead of jɪ́ɴ bɪ̀ɴ)
	  - See https://en.wikipedia.org/wiki/Burmese_language#Consonants)
- Unlike for schwas, the alternatives are not provided, to make the results cleaner.
- It does not transcribe correct words derived from Pali or Sanskrit that has special/different pronunciations
	- Eg: ဘုရား "Buddha" would be transcribed as /bṵ.já/ instead of /pʰa.já/, as ordinarily, ဘု is /bṵ/

### Bugs
- A problem detecting ဦး (high-tone ဦ)
- Some problems with words like သင်္ဘော, where ဘော is not transcribed correctly... (probably also because of stacking?)
- Some problems with ယျ, which occurs in မေတ္တေယျဘုရား
	- ယျ becomes /jj-/, which is generally just merged into /j-/
			
### TODO
- [x] Investigate possibility of displaying alternatives as full syllables, instead of using "/" per alt-letter, to make things more readable.
	- this was done in 0.4
- [ ] LONG TERM: extend to cover other romanisation systems
	- We now have MLCTS and the modified MLCTS("MLCTS2"), but others will be added progressively.
	
- To ensure stacking order for diacritics, or letters are uniform or normalised. 
	- [x] asat and anusvara order
		- asat-aukmyit order will now be normalised to aukmyit-asat order
	- [ ] usage of ၀ (digit 0) for ဝ (letter /w/)
		- at the moment, both correspond to /w/. Not optimum, of course, since the actual digit will be transcribed wrongly.
	- WIKT's auto-romaniser performs this check and normalisation, so we can do something similar.
		- Wait... does it? I was sure it did, but I can't find that part now...
