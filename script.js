$(document).ready(function(){
	
	
		$('.crop-img').on({
		click: function(){
			var filename = $(this).attr('src');

			var number = filename.match(/\d+/)[0];
			var caption = captions[number];
			console.log(caption);
			$('#slideshow .caption').empty().text(caption);


			$('#slideshow').css({
				'background-image': 'url(big-images/'+number+'.jpg)'
			}).show();
			
			$('.closebtn').show();

		}
		
	});
	
			$('.me').on({
		click: function(){
			var filename = $(this).attr('src');

			var number = filename.match(/\d+/)[0];
			var caption = captions[number];
			console.log(caption);
			$('#slideshow .caption').empty().text(caption);


			$('#slideshow').css({
				'background-image': 'url(big-images/'+number+'.jpg)'
			}).show();

		}
		
	});


	$('#slideshow').on({
		click: function(){
			$(this).hide();

		}
	});
	
	$('.closebtn').on({
		click: function(){
			$('#slideshow').hide();

		}
	});

	$('a.video-link').on({
		click: function(e){
			e.preventDefault();
			var id = $(this).attr('data-id');
			var top = $(this).position().top;
			var left = $(this).position().left;
			console.log(top, left);
			$('.container').append(
				$('<div>').addClass('video').css({
					top: top,
					left: left
				}).append(	$('<div>').addClass('close') ).on({
					click: function(){
						
						$(this).remove();
					}
				})
				.append(
					$('<iframe>').attr({
						frameborder: 1,
						allowfullscreen: true,
						src: 'https://www.youtube.com/embed/'+id+'?autoplay=1',
						width: 720,
						height: 410, // * 0.6
					})
				)
			);

		}
	});	
});





var captions = {
	'1': '"Amores Perros" Secret location event series - Paris, France, 2018.',
	'2': '"El cielo" poster design, 2013',
	'3': '"My baby is an idiot" poster design 2014',
	'4': '"Lost" poster design, 2014',
	'5': '"Tri parti" poster design, 2013',
// 	'6': '""',

	'6': '"No Spiritual Surrender - No Spiritual Surrender" Cabrera Records - Vinyl Hardcover - Madrid, Spain, 2017.',
	'7': 'Poster design for a secret location techno and experimental music party and in Moscow, Russia - Poster - 2018.',
	'8': 'Poster design for a secret location Techno and Experimental music party and in Moscow, Russia - Poster - 2017.',
	'9': 'Poster design for a secret location Techno and Experimental music party and in Moscow, Russia - Poster - 2018.',
	'51': 'Poster design for a secret location Techno and Experimental music party and in Moscow, Russia - Poster - 2019.',
	'99': 'Poster design for a secret location Techno and Experimental music party and in Moscow, Russia - Poster - 2017.',
	'10': 'Newspaper design based on  the japanese view of the Cherry Blossom flower in the WWII (420 x 270 mm), 2016',
	'101': 'Newspaper design based on the japanese view of the Cherry Blossom flower in the WWII (420 x 270 mm), 2016',
	'102': 'Newspaper design based on the japanese view of the Cherry Blossom flower in the WWII (420 x 270 mm), 2016',
	'103': 'Newspaper design based on the japanese view of the Cherry Blossom flower in the WWII (420 x 270 mm), 2016',
	'104': 'Newspaper design based on the japanese view of the Cherry Blossom flower in the WWII (420 x 270 mm), 2016',	
	'11': 'Poster design for Isotoop January 21st edition with Rrose, Lucy, Fjäder and Van Anh. Isotoop is a Rottterdam based techno events cicle bringing music and art exhibitions together. http://www.isotoop.nl/',
	'14': 'Analogue technique with plaster bands to have the shape of the torso, technique with alginate powder and plaster to have the shape of the left hand, technique with liquid latex and plaster to have the shape of the right hand and the forearm, technique with modelling clay to have the shape of part of the waist and part of the upper back, technique with air drying clay to have the shape of backside and pelvis, technique with air cotton textile and textile dryer to have the shape of the upper leg, 2016',
	'15': ' ',
	'16': '"The Twilight" Tarot card re-design',
	'17': '"Ouroboros"',
	'18': '"Fuego en mi origen" poster design',
	'19': 'Founded in 2015 by avid and visionary minds, London based techno organisation: Unmasked, is born. Bringing together and uniting as one the people with the music. A journey into a nocturnal space, which glides through the confines between electronic, industrial techno music. Showcased through the transcendent sound system of Funktion One and a live visual sense, each without compromise. Proposing rising artists, selected for their quality of sound and performance. Delivering DJ sets synergising cdj with vinyl, live hybrid performances and authenticity behind the console, 2017.',
	'20': 'Founded in 2015 by avid and visionary minds, London based techno organisation: Unmasked, is born. Bringing together and uniting as one the people with the music. A journey into a nocturnal space, which glides through the confines between electronic, industrial techno music. Showcased through the transcendent sound system of Funktion One and a live visual sense, each without compromise. Proposing rising artists, selected for their quality of sound and performance. Delivering DJ sets synergising cdj with vinyl, live hybrid performances and authenticity behind the console.',
	'21': 'Wild futuur natuur. CGI experimentation, 2020.',
	'22': '"Libra" poster design, 2015',
	'25': '"After silence that nearest which comes to expressing the inexpressible" Poster design',
	'26': '"Consumed-Self" Plaster, oil, acrylic, cigarettes sculpture, 2016',
	'27': 'Metamorph is a New York based immersive experience that utilizes music and live visuals to incubate a shift in perception in the field of experimental music. http://www.metamorph.nyc',
	'28': 'Metamorph is a New York based immersive experience that utilizes music and live visuals to incubate a shift in perception in the field of experimental music. http://www.metamorph.nyc',
	'288': 'Metamorph is a New York based immersive experience that utilizes music and live visuals to incubate a shift in perception in the field of experimental music. http://www.metamorph.nyc',
	'29': 'Metamorph is a New York based immersive experience that utilizes music and live visuals to incubate a shift in perception in the field of experimental music. http://www.metamorph.nyc',
	'30': 'Metamorph is a New York based immersive experience that utilizes music and live visuals to incubate a shift in perception in the field of experimental music. http://www.metamorph.nyc',
	'31': 'Metamorph is a New York based immersive experience that utilizes music and live visuals to incubate a shift in perception in the field of experimental music. http://www.metamorph.nyc',
	'32': 'Metamorph is a New York based immersive experience that utilizes music and live visuals to incubate a shift in perception in the field of experimental music. http://www.metamorph.nyc',
	'33': 'Metamorph is a New York based immersive experience that utilizes music and live visuals to incubate a shift in perception in the field of experimental music. http://www.metamorph.nyc',
	'34': '2017 Anual report Web Design for the Haagse Historish Museum and the Museum de Gavengenpoort. Collaboration with Dana Doorenboos. https://sophiadejong.github.io/jaarverslag_haagse_historisch_museum_2017/',
	'351': 'Isotoop with Forest Drive West, Ben Buitendijk Van Anh @ WORM Rotterdam - Poster Design - February 16th 2019',
	'36':'Monument 87: I/Y. Podcast series <a href="https://soundcloud.com/monument-podcast/monument-87-iy">here</a> ',
	'37': 'Urban Sound/Landscape project based on the experience of sound and its architecture made by a translation of a sound recording of Den Haag Central Station in a rush hour, converted to a spectrogram with relief and the sound is the interpretation of the spectrogram, 2016',
	'38': 'Royal Academy of Arts, The Hague Soundscape IST Lunch lecture - Poster - 2017.',
// '38': 'Unmasked London, Founded in 2015 by avid and visionary minds, London based techno organisation: Unmasked, is born. Bringing together and uniting as one the people with the music. A journey into a nocturnal space, which glides through the confines between electronic, industrial techno music. Showcased through the transcendent sound system of Funktion One and a live visual sense, each without compromise. Proposing rising artists, selected for their quality of sound and performance. Delivering DJ sets synergising cdj with vinyl, live hybrid performances and authenticity behind the console. Unmasked poster April edition, London, UK, 2017',

	'39': '"Anti-Art" is a fanzine based on six degrees of inpiration: Ballet, Constructivism, Punk Music, Dark Art, Gabriel Grün, and Les Incoherents art movement (148 x 210 mm), 2016.',
	'41': '"Anti-Art" is a fanzine based on six degrees of inpiration: Ballet, Constructivism, Punk Music, Dark Art, Gabriel Grün, and Les Incoherents art movement (148 x 210 mm), 2016.',
	'43': '"Anti-Art" is a fanzine based on six degrees of inpiration: Ballet, Constructivism, Punk Music, Dark Art, Gabriel Grün, and Les Incoherents art movement (148 x 210 mm), 2016.',
	'44': '"Anti-Art" is a fanzine based on six degrees of inpiration: Ballet, Constructivism, Punk Music, Dark Art, Gabriel Grün, and Les Incoherents art movement (148 x 210 mm), 2016.',
	'46': '"Archive Fever: A Freudian Impression: A Freudian Impression, Jacques Derida / Mothers of Plaza de Mayo" Publication about the importance of the archive and the paralelism between the Dirty War in Argentina. Images from the International Institute of Social History - (287 x 197 mm) 2018.',
	'461': '"Archive Fever: A Freudian Impression, Jacques Derida / Mothers of Plaza de Mayo" Publication about the importance of the archive and the paralelism between the Dirty War in Argentina. Images from the International Institute of Social History - (287 x 197 mm) 2018.',
	'462': '"Archive Fever: A Freudian Impression, Jacques Derida / Mothers of Plaza de Mayo" Publication about the importance of the archive and the paralelism between the Dirty War in Argentina. Images from the International Institute of Social History - (287 x 197 mm) 2018',
	'463': '"Archive Fever: A Freudian Impression, Jacques Derida / Mothers of Plaza de Mayo" Publication about the importance of the archive and the paralelism between the Dirty War in Argentina. Images from the International Institute of Social History - (287 x 197 mm) 2018.',
	'465': '"Archive Fever: A Freudian Impression, Jacques Derida / Mothers of Plaza de Mayo" Publication about the importance of the archive and the paralelism between the Dirty War in Argentina. Images from the International Institute of Social History - (287 x 197 mm) 2018.',
	'466': '"Archive Fever: A Freudian Impression, Jacques Derida / Mothers of Plaza de Mayo" Publication about the importance of the archive and the paralelism between the Dirty War in Argentina. Images from the International Institute of Social History - (287 x 197 mm) 2018.',
	// 	'47': '"Horizonte Vertical" mixed media poster, 2017',
	'47': '	"Veil of Ignorance - Uun" No Future but What We Make Records - Vinyl Hardcover - Berlin, Germany, 2018.',	
	'48': '"Ampersand" poster, 2017',
	'49': '"Index" is a tote bag magazine containing a bunch of Essays on Typography and equality, Typefaces and Human Rights Album by Sophia de Jong. Collaboration with Auke Lanskin & Carolina Pinto (420 x 270 mm), 2016',
	'52': '',	
	'60': 'Deviant 4th Anniversary with Vladw, Zedje & Arseny [Live], Unfinished Portraits [Live] and Ceremonial Use of Light [Live] at Cocoliche, Buenos Aires, Argentina, 2018',
	'61': 'Poster design for a secret location Techno and Experimental music party and in Moscow, Russia, 2019',
	'69' : 'Wild futuur natuur - Personal ongoing project - CGI experiments, 2020.',
	'70' : 'Wild futuur natuur - Personal ongoing project - CGI experiments, 2020.',
	'71' : 'Wild futuur natuur - Personal ongoing project - CGI experiments, 2020.',
	'72' : 'Wild futuur natuur - Personal ongoing project - CGI experiments, 2020.',
	'73' : 'Wild futuur natuur - Personal ongoing project - CGI experiments, 2020.',
	'74' : 'Wild futuur natuur - Personal ongoing project - CGI experiments, 2020.',
	'75' : 'Wild futuur natuur - Personal ongoing project - CGI experiments, 2020.',
	'81' : 'Nocturnal Anomalies podcast with Raffaele Pezella - Poster - New York, 2019.',
// 	'81' : 'Skin Textures exploration, 2019.',
	'82' : '"Fjólublátt - Hugarró" Vinyl Hardcover - Reykjavík, Iceland, 2016.',
	'83' : 'Soft robotics muscle expertiments - Liquid latex, 2020.',
	'833' : 'Soft robotics muscle expertiments - Liquid latex, 2020.',
	'8333' : 'Soft robotics muscle expertiments - Liquid latex, 2020',
	'84' : 'Soft robotics muscle expertiments - Liquid latex, 2020',
	'600' : '"Hanami" Video game based on the japanese cherry blossom season, 2016.',
	'601' : '"Hanami" Video game based on the japanese cherry blossom season, 2016.',
	'602' : '"Hanami" Video game based on the japanese cherry blossom season, 2016.',
	'900' : '3D Muscle prototype - Personal ongoing project - CGI anatomy study, 2020.',
	'901' : '3D Muscle prototype - Personal ongoing project - CGI anatomy study, 2020.',
	'910' : '"Dope Show" - Today scientists claim to have found that GDF-8 Myostatin, a protein that regulates the amount of muscle mass that you can gain, if it’s genetically manipulated to lack, muscles can grow as twice as naturally possible and body fat is halved if triggered with weight training. The project is a speculative and critical video-poem about the dark side of a female’s Bodybuilding journey seeking to become as muscular as possible with the help of CRISPR-Cas9, a novel and permanent genome editing technology. Throughout a theatrical performance, Dope Show analyses the extremist psychological and physical transformation of mutating into the illusion of the image of health, perfection and power as the ultimate goal. - Still image from video-poem - Real footage+CGI+VFX - 4m37s - 2020.',
	'911' : '"Dope Show" - Today scientists claim to have found that GDF-8 Myostatin, a protein that regulates the amount of muscle mass that you can gain, if it’s genetically manipulated to lack, muscles can grow as twice as naturally possible and body fat is halved if triggered with weight training. The project is a speculative and critical video-poem about the dark side of a female’s Bodybuilding journey seeking to become as muscular as possible with the help of CRISPR-Cas9, a novel and permanent genome editing technology. Throughout a theatrical performance, Dope Show analyses the extremist psychological and physical transformation of mutating into the illusion of the image of health, perfection and power as the ultimate goal. - Still image from video-poem - 4m37s - 2020.',

// 	'603' : '"Untitled" Paint (580 x 420 mm, Acrylic, wood, photography), 2016.',
	'603' : '"Ausencia de Mi" Alfredo Zitarrosa documentary by Melina Terribili - Movie Poster - Collaboration with NicoRisso Estudio, 2018.',

	'222': '',
	'223': 'sophiamarinadejongy@gmail.com +31614906568',	
	'3333': 'soundcloud.com/neithme',
	'224': 'Argentinian-Dutch Visual Artist and Graphic Designer immersed in emotional and conceptual art, focused in the field of body language, embodiment and the fusion of experiemental sound and mixed media.',
	}

