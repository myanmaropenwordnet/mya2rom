# Old Readme

This document contains the comments that served as updates+buglist+tofix+misc in the pre-GitHub versions (0.4.1 and before)

_Limitations and To-Dos will be ported to the new Readme.txt as well_

## Updates

- 12 Jul 2017 (0.4.1):
	- Fixed the oversight of not taking into account the vertical bar enclosed alternatives when performing substitutions  
  
05 Jul 2017 (0.4): 
	- Sounds with alternatives are now separated by commas and enclosed in vertical bars (eg: |o,ou|)

20 Jun 2017 (0.3):
	- Vowels are now pre-sorted, so there is no longer dependency on underscore.js to perform the sorting...

17 Jun 2017:
	- Initial version of MYA2ROM.js, as extended from MYA2IPA.js

## Limitations
- It does not convert "stacked" letters [or does it now?]
- Silenced letters without a consonant (used in transliterations (Like "t" in Watson)) do not currently convert successfully all the time.
  - It is a what-you-type-is-what-you-get automated romaniser, which means it does not:
      - take into account schwas
				- Nevertheless, schwas are provided together with the full vowel, as an alternative.
      - take into account voicing sandhi (where unvoiced letters become voiced ones)
		  	- (for example, ရင်းပင် will be jɪ́ɴ pɪ̀ɴ instead of jɪ́ɴ bɪ̀ɴ)
		  - See https://en.wikipedia.org/wiki/Burmese_language#Consonants)
- Unlike for schwas, the alternatives are not provided, to make the results cleaner.
- It does not transcribe correct words derived from Pali or Sanskrit that has special/different pronunciations
	- Eg: ဘုရား "Buddha" would be transcribed as /bṵ.já/ instead of /pʰa.já/, as ordinarily, ဘု is /bṵ/

## Bugs
- Some problems with words like သင်္ဘော, where ဘော is not transcribed correctly... (probably also because of stacking?)
- Some problems with ယျ, which occurs in မေတ္တေယျဘုရား
	- ယျ becomes /jj-/, which is generally just merged into /j-/
			
## TODO
- Investigate possibility of displaying alternatives as full syllables, instead of using "/", to make things more readable.
- LONG TERM: extend to cover other romanisation systems
	- We now have MLCTS and the modified MLCTS("MLCTS2"), but others will be added progressively.
	
- [DONE!]
	- To ensure stacking order for diacritics are uniform or normalised. For example, asat and anusvara order. [DONE!]
		- WIKT's auto-romaniser performs this check and normalisation
