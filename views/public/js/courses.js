//---- Variables
const BoxContainer = document.querySelector('.BoxContainer');
const Box = document.querySelector('.CourseBox');
const exitButton = document.querySelector('.CourseBox__exit')
const CoursesContainer = document.querySelector('.CoursesContainer');

//---- Functions
function loadData(course){
    document.querySelector('.CourseBox__image').setAttribute('src', `/admin/images/courses/${course.image}`) 
    document.querySelector('.CourseBox__name').textContent = course.title
    document.getElementById('course-input').value = course.id_course;

    document.querySelector('.CourseBox__date').textContent =  new Date(course.created_at).toLocaleDateString('es-ES', { year:"numeric", month:"short", day:"numeric"})
    document.querySelector('.CourseBox__lastDate').textContent =  "Ultima actualización:  " +new Date(course.created_at).toLocaleDateString('es-ES', { year:"numeric", month:"short", day:"numeric"})
    document.querySelector('.CourseBox__description').innerText = course.description
}

function openBox(){
    document.querySelector('html').style.overflow = 'hidden'
    BoxContainer.classList.add('BoxContainer--active');
    setTimeout(()=>{
        Box.classList.add('CourseBox--active')
    }, 50)
}

function closeBox(){
    document.querySelector('html').style.overflow = 'auto'
    Box.classList.remove('CourseBox--active')
    setTimeout(()=>{
        BoxContainer.classList.remove('BoxContainer--active');
    }, 401)
}

//---- Events
CoursesContainer.addEventListener('click', e=>{
    const { target } = e;

    if(target.classList.contains('CourseCard__button') && !BoxContainer.classList.contains('BoxContainer--active')){
        const id = e.target.dataset.id || '';
        
        (async()=>{
            const course = await fetch(`/api/courses/${id}`).then(res => res.json());
            if(course && (course.length == 1)){
                await loadData(course[0])
                openBox()
            }
        })()
    }
})

exitButton.addEventListener('click', ()=> closeBox() )