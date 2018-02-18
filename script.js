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
	'1': '"Flora&Corpo" poster design, 2015',
	'2': '"El cielo" poster design, 2013',
	'3': '"My baby is an idiot" poster design 2014',
	'4': '"Lost" poster design, 2014',
	'5': '"Tri parti" poster design, 2013',
	'6': '"No Spiritual Surrender - No Spiritual Surrender" Vinyl Hardcover, 2017',
	'7': 'Poster design for a secret location techno and experimental music party and in Moscow, Russia 2014',
	'8': 'Poster design for a secret location techno and experimental music party and in Moscow, Russia, 2015',
	'9': 'Poster design for a secret location techno and experimental music party and in Moscow, Russia, 2017',
	'99': 'Poster design for a secret location techno and experimental music party and in Moscow, Russia, 2017',
	'10': 'Newspaper design based on  the japanese view of the Cherry Blossoms flowers in the WWII, 2016',
	'101': 'Newspaper design based on  the japanese view of the Cherry Blossoms flowers in the WWII, 2016',
	'102': 'Newspaper design based on  the japanese view of the Cherry Blossoms flowers in the WWII, 2016',
	'103': 'Newspaper design based on  the japanese view of the Cherry Blossoms flowers in the WWII, 2016',
	'11': 'Poster design for Isotoop January 21st edition with Rrose, Lucy, Fjäder and Van Anh. Isotoop is a Rottterdam based techno events cicle bringing music and art exhibitions together. http://www.isotoop.nl/',
	'14': 'Analogue technique with plaster bands to have the shape of the torso, technique with alginate powder and plaster to have the shape of the left hand, technique with liquid latex and plaster to have the shape of the right hand and the forearm, technique with modelling clay to have the shape of part of the waist and part of the upper back, technique with air drying clay to have the shape of backside and pelvis, technique with air cotton textile and textile dryer to have the shape of the upper leg, 2016',
	'15': ' ',
	'16': '"The Twilight" Tarot card re-design',
	'17': '"Ouroboros"',
	'18': '"Fuego en mi origen" poster design',
	'19': 'Founded in 2015 by avid and visionary minds, London based techno organisation: Unmasked, is born. Bringing together and uniting as one the people with the music. A journey into a nocturnal space, which glides through the confines between electronic, industrial techno music. Showcased through the transcendent sound system of Funktion One and a live visual sense, each without compromise. Proposing rising artists, selected for their quality of sound and performance. Delivering DJ sets synergising cdj with vinyl, live hybrid performances and authenticity behind the console.',
	'20': 'Founded in 2015 by avid and visionary minds, London based techno organisation: Unmasked, is born. Bringing together and uniting as one the people with the music. A journey into a nocturnal space, which glides through the confines between electronic, industrial techno music. Showcased through the transcendent sound system of Funktion One and a live visual sense, each without compromise. Proposing rising artists, selected for their quality of sound and performance. Delivering DJ sets synergising cdj with vinyl, live hybrid performances and authenticity behind the console.',
	'21': '"The Truth Will Set You Dead" Publication Series about corrupted nations, 2017',
	'22': '"Libra" poster design, 2015',
	'25': '"After silence that nearest which comes to expressing the inexpressible" poster design',
	'26': '"Consumed-Self" Plaster, oil, acrylic, cigarettes sculpture, 2016',
	'27': 'Metamorph is a New York based immersive experience that utilizes music and live visuals to incubate a shift in perception in the field of experimental music. http://www.metamorph.nyc',
	'28': 'Metamorph is a New York based immersive experience that utilizes music and live visuals to incubate a shift in perception in the field of experimental music. http://www.metamorph.nyc',
	'29': 'Metamorph is a New York based immersive experience that utilizes music and live visuals to incubate a shift in perception in the field of experimental music. http://www.metamorph.nyc',
	'30': 'Metamorph is a New York based immersive experience that utilizes music and live visuals to incubate a shift in perception in the field of experimental music. http://www.metamorph.nyc',
	'31': 'Metamorph is a New York based immersive experience that utilizes music and live visuals to incubate a shift in perception in the field of experimental music. http://www.metamorph.nyc',
	'32': 'Metamorph is a New York based immersive experience that utilizes music and live visuals to incubate a shift in perception in the field of experimental music. http://www.metamorph.nyc',
	'33': 'Metamorph is a New York based immersive experience that utilizes music and live visuals to incubate a shift in perception in the field of experimental music. http://www.metamorph.nyc',
	'34': '"Tango" poster design',
	'35':'Monument 91: +plattform. Podcast series https://soundcloud.com/monument-podcast/monument-91-plattform',
	'36':'Monument 87: I/Y. Podcast series https://soundcloud.com/monument-podcast/monument-87-iy ',
	'37': 'Urban Sound/Landscape project based on the experience of sound and its architecture made by a translation of a sound recording of Den Haag Central Station in a rush hour, converted to a spectrogram with relief and the sound is the interpretation of the spectrogram.',
	'38': 'Silkscreened poster inspired by the manifest Electro Library written by El Lissitzky. The process is from a 3D typographical maquette to a 2D poster, 2017',
	'39': '"Anti-Art" is a fanzine based on six degrees of inpiration: Ballet, Constructivism, Punk Music, Dark Art, Gabriel Grün, and Les Incoherents art movement, 2016',
	'41': '"Anti-Art" is a fanzine based on six degrees of inpiration: Ballet, Constructivism, Punk Music, Dark Art, Gabriel Grün, and Les Incoherents art movement, 2016',
	'43': '"Anti-Art" is a fanzine based on six degrees of inpiration: Ballet, Constructivism, Punk Music, Dark Art, Gabriel Grün, and Les Incoherents art movement, 2016',
	'44': '"Anti-Art" is a fanzine based on six degrees of inpiration: Ballet, Constructivism, Punk Music, Dark Art, Gabriel Grün, and Les Incoherents art movement, 2016',
	'46': '"Untitled" poster design, 2017',
	'47': '"Ampersand" poster design, 2014',
	'48': '"Ampersand" poster design, 2014',
	'49': '"Void" poster design, 2014',
	'222': '',
	'223': 'phiadejong@gmail.com',
	'224': 'Argentinian-Dutch, The Hague based graphic designer, visual artist and ballet dancer immersed in emotional and conceptual art, focused in the field of body movement and it’s language and the combination with experiemental sound and different media platforms.',
	}

