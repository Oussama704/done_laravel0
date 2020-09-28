
    <input style="margin: 10px" class="forms"type="number" name="num_tele" placeholder="Numéro de téléphone" value="{{old('num_tele',$post->num_tele ?? null)}}" required><br>
    <input style="margin: 10px" class="forms"type="text" name="ville" placeholder="Ville" value="{{old('ville',$post->ville ?? null)}}"required><br>
    <input style="margin: 10px" class="forms"type="text" name="location" placeholder="Location"value="{{old('location',$post->location ?? null)}}" required><br>
    <input style="margin: 10px; " class="forms" type="text" name="titre" placeholder="Titre"value="{{old('titre',$post->titre ?? null)}}" required><br>
    <input style="margin: 10px; " class="forms" type="text" name="description" placeholder="Description"value="{{old('description',$post->description ?? null)}}" required><br>
    <label>Choisir une catégorie :</label>
    <select style="margin: 10px; width: 150px " class="forms" type="text" name="categorie"  required>
      <option name="categorie" value="Electronique">Electronique</option>
      <option name="categorie" value="Immobilier">Immobilier</option>
      <option name="categorie" value="Autres">Autres</option>

    </select><br>
    <label>Choisir une image</label>
    <input style="margin: 10px; width: 250px " class="forms" type="file" name="image" placeholder="image" accept="image/png, image/jpg"><br>
    <br><br>
    <input class="forms button" type="submit" name="submit" value="Valider ->">



  