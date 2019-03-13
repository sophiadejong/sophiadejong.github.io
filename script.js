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
	'1': 'Amores Perros poster, Paris, 2018',
	'2': '"El cielo" poster design, 2013',
	'3': '"My baby is an idiot" poster design 2014',
	'4': '"Lost" poster design, 2014',
	'5': '"Tri parti" poster design, 2013',
// 	'6': '""',

	'6': '"No Spiritual Surrender - No Spiritual Surrender" Vinyl Hardcover, 2017',
	'7': 'Poster design for a secret location techno and experimental music party and in Moscow, Russia 2018',
	'8': 'Poster design for a secret location Techno and Experimental music party and in Moscow, Russia, 2017',
	'9': 'Poster design for a secret location Techno and Experimental music party and in Moscow, Russia, 2018',
	'51': 'Poster design for a secret location Techno and Experimental music party and in Moscow, Russia, 2019',
	'99': 'Poster design for a secret location Techno and Experimental music party and in Moscow, Russia, 2017',
	'10': 'Newspaper design based on  the japanese view of the Cherry Blossoms flowers in the WWII (420 x 270 mm), 2016',
	'101': 'Newspaper design based on  the japanese view of the Cherry Blossoms flowers in the WWII (420 x 270 mm), 2016',
	'102': 'Newspaper design based on  the japanese view of the Cherry Blossoms flowers in the WWII (420 x 270 mm), 2016',
	'103': 'Newspaper design based on  the japanese view of the Cherry Blossoms flowers in the WWII (420 x 270 mm), 2016',
	'11': 'Poster design for Isotoop January 21st edition with Rrose, Lucy, Fjäder and Van Anh. Isotoop is a Rottterdam based techno events cicle bringing music and art exhibitions together. http://www.isotoop.nl/',
	'14': 'Analogue technique with plaster bands to have the shape of the torso, technique with alginate powder and plaster to have the shape of the left hand, technique with liquid latex and plaster to have the shape of the right hand and the forearm, technique with modelling clay to have the shape of part of the waist and part of the upper back, technique with air drying clay to have the shape of backside and pelvis, technique with air cotton textile and textile dryer to have the shape of the upper leg, 2016',
	'15': ' ',
	'16': '"The Twilight" Tarot card re-design',
	'17': '"Ouroboros"',
	'18': '"Fuego en mi origen" poster design',
	'19': 'Founded in 2015 by avid and visionary minds, London based techno organisation: Unmasked, is born. Bringing together and uniting as one the people with the music. A journey into a nocturnal space, which glides through the confines between electronic, industrial techno music. Showcased through the transcendent sound system of Funktion One and a live visual sense, each without compromise. Proposing rising artists, selected for their quality of sound and performance. Delivering DJ sets synergising cdj with vinyl, live hybrid performances and authenticity behind the console, 2017',
	'20': 'Founded in 2015 by avid and visionary minds, London based techno organisation: Unmasked, is born. Bringing together and uniting as one the people with the music. A journey into a nocturnal space, which glides through the confines between electronic, industrial techno music. Showcased through the transcendent sound system of Funktion One and a live visual sense, each without compromise. Proposing rising artists, selected for their quality of sound and performance. Delivering DJ sets synergising cdj with vinyl, live hybrid performances and authenticity behind the console.',
	'21': '"The Truth Will Set You Dead" Publication Series about corrupted nations, 2017',
	'22': '"Libra" poster design, 2015',
	'25': '"After silence that nearest which comes to expressing the inexpressible" poster design',
	'26': '"Consumed-Self" Plaster, oil, acrylic, cigarettes sculpture, 2016',
	'27': 'Metamorph is a New York based immersive experience that utilizes music and live visuals to incubate a shift in perception in the field of experimental music. http://www.metamorph.nyc',
	'28': 'Metamorph is a New York based immersive experience that utilizes music and live visuals to incubate a shift in perception in the field of experimental music. http://www.metamorph.nyc',
	'288': 'Metamorph is a New York based immersive experience that utilizes music and live visuals to incubate a shift in perception in the field of experimental music. http://www.metamorph.nyc',
	'29': 'Metamorph is a New York based immersive experience that utilizes music and live visuals to incubate a shift in perception in the field of experimental music. http://www.metamorph.nyc',
	'30': 'Metamorph is a New York based immersive experience that utilizes music and live visuals to incubate a shift in perception in the field of experimental music. http://www.metamorph.nyc',
	'31': 'Metamorph is a New York based immersive experience that utilizes music and live visuals to incubate a shift in perception in the field of experimental music. http://www.metamorph.nyc',
	'32': 'Metamorph is a New York based immersive experience that utilizes music and live visuals to incubate a shift in perception in the field of experimental music. http://www.metamorph.nyc',
	'33': 'Metamorph is a New York based immersive experience that utilizes music and live visuals to incubate a shift in perception in the field of experimental music. http://www.metamorph.nyc',
	'34': '2017 Anual report Web Design for the Haagse Historish Museum and the Museum de Gavengenpoort. Collaboration with Dana Doorenboos.',
	'35': 'Isotoop with Forest Drive West, Ben Buitendijk Van Anh @ WORM Rotterdam, February 16th 2019',
	'36':'Monument 87: I/Y. Podcast series <a href="https://soundcloud.com/monument-podcast/monument-87-iy">here</a> ',
	'37': 'Urban Sound/Landscape project based on the experience of sound and its architecture made by a translation of a sound recording of Den Haag Central Station in a rush hour, converted to a spectrogram with relief and the sound is the interpretation of the spectrogram, 2016',
	'38': 'Publication based on hidden Nuclear Weapons in the Netherlands after WWII (290 x 210 mm), 2017',
	'39': '"Anti-Art" is a fanzine based on six degrees of inpiration: Ballet, Constructivism, Punk Music, Dark Art, Gabriel Grün, and Les Incoherents art movement (148 x 210 mm), 2016',
	'41': '"Anti-Art" is a fanzine based on six degrees of inpiration: Ballet, Constructivism, Punk Music, Dark Art, Gabriel Grün, and Les Incoherents art movement (148 x 210 mm), 2016',
	'43': '"Anti-Art" is a fanzine based on six degrees of inpiration: Ballet, Constructivism, Punk Music, Dark Art, Gabriel Grün, and Les Incoherents art movement (148 x 210 mm), 2016',
	'44': '"Anti-Art" is a fanzine based on six degrees of inpiration: Ballet, Constructivism, Punk Music, Dark Art, Gabriel Grün, and Les Incoherents art movement (148 x 210 mm), 2016',
	'46': '"Index" is a tote bag magazine containing a bunch of Essays on Typography and equality, Typefaces and Human Rights Album by Sophia de Jong. Collaboration with Auke Lanskin & Carolina Pinto (420 x 270 mm), 2016 ',
	'47': '"Horizonte Vertical" mixed media poster, 2017',
	'48': '"Ampersand" poster, 2017',
	'49': 'Unmasked London, Founded in 2015 by avid and visionary minds, London based techno organisation: Unmasked, is born. Bringing together and uniting as one the people with the music. A journey into a nocturnal space, which glides through the confines between electronic, industrial techno music. Showcased through the transcendent sound system of Funktion One and a live visual sense, each without compromise. Proposing rising artists, selected for their quality of sound and performance. Delivering DJ sets synergising cdj with vinyl, live hybrid performances and authenticity behind the console. Unmasked poster April edition, London, UK, 2017',
	'52': '',	
	'60': 'Deviant 4th Anniversary with Vladw, Zedje & Arseny [Live], Unfinished Portraits [Live] and Ceremonial Use of Light [Live] at Cocoliche, Buenos Aires, Argentina, 2018',
	'61': 'Poster design for a secret location Techno and Experimental music party and in Moscow, Russia, 2019',
	'222': '',
	'223': 'sophiamarinadejongy@gmail.com +31614906568',	
	'3333': 'soundcloud.com/neithme',
	'224': 'Argentine-Dutch, Netherlands based Graphic Designer, Visual Artist and Ballet teacher and dancer immersed in emotional and conceptual art, focused in the field of body movement and its language, embodiment, the rave scene and the fusion of experiemental sound and mixed media platforms.',
	}

