fetch('data.json')
    .then(res => res.json())
    .then(data => {
        document.getElementById("name").textContent = data.name;
        document.getElementById("title").textContent = data.title;
        document.getElementById("about").textContent = data.about;

        const fillList = (id, items) => {
            const ul = document.getElementById(id);
            items.forEach(item => {
                const li = document.createElement("li");
                li.textContent = item;
                ul.appendChild(li);
            });
        };

        fillList("education", data.education);
        fillList("skills", data.skills);
        fillList("projects", data.projects);
        fillList("languages", data.languages);

        document.getElementById("phone").textContent = data.contact.phone;
        document.getElementById("email").textContent = data.contact.email;
        document.getElementById("linkedin").href = data.contact.linkedin;
    });
